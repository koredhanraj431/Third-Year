cl_is=['STOP','ADD','SUB','MULTI','MOVER','MOVEM','COMP','BC','DIV','READ','PRINT']
cl_ad=['START','END','ORIGIN','EQU','LTORG']
cl_dl=['DS','DC']
cl_rg=["AREG","BREG","CREG",'DREG']
lit="="
f=open("input.txt","r")
intermediate=[]
literal=0
symbols=0
constants=0
LC=0
symbol_table=[]
symbol_loc=[]
literal_table=[]
literal_loc=[]
pool=0
symb=0
for x in f:
    line = x.replace(","," ").replace("\n"," ").split(" ")
    int1=""
    bool = 0
    for i in line:
        if i in cl_is:
            code = cl_is.index(i)
            int1 += "(IS,"+str(code)+")"
        elif i in cl_ad:
            code=cl_ad.index(i)
            int1+="(AD,"+str(code+1)+")"
            if i=="START":
                bool=1
            if i=="ORIGIN" or i=="EQU":
                bool=1
                continue
            elif i == "LTORG" or i == "END":
                int1=""
                bool=1
                for k in range(pool,len(literal_loc)):
                    literal_loc[k]=LC
                    LC+=1
                    int1+="(AD,05)(DL,02)(C,"+literal_table[k][2:-1]+")"
                    intermediate.append(int1)
                    int1=""
                pool=len(literal_loc)
        elif i in cl_dl:
            code=cl_dl.index(i)
            int1 += "(DL,"+str(code+1)+")"
            if i== "DS":
                symbol_loc[symbol_table.index(line[0])]=LC

        elif i in cl_rg:
            code=cl_rg.index(i)
            int1 += "(RG,"+str(code+1)+")"
        elif i.find(lit)!=-1:
            int1 += "(L,"+str(literal)+")"
            literal += 1
            literal_table.append(i)
            literal_loc.append(0)
        elif i.find("+")!=-1:
            sym=i.split("+")
            int1 += "(C," + str(symbol_loc[symbol_table.index(sym[0])]+int(sym[1])) + ")"
            LC=symbol_loc[symbol_table.index(sym[0])]+int(sym[1])
        elif i.isnumeric() and bool==1:
            int1 += "(C,"+i+")"
            if constants==0:
                LC=int(i)
        elif i.isalpha() or i.isalnum():
            if i.isnumeric() or i in symbol_table:
                continue
            if i in symbol_table:
                int1 += "(S,"+str(symbol_table.index(i))+")"
            else:
                int1+= "(S,"+str(symbols)+")"

            symbols += 1
            symbol_table.append(i)
            if line.index(i)==0:
                symbol_loc.append(LC)
            else:
                symbol_loc.append(0)
    if bool==0:
        LC+=1
    intermediate.append(int1)
print("\n\nIntermediate code is:\n")
f2=open("intermediate.txt","w")
for i in intermediate:
    f2.write(i)
    f2.write("\n")
    print(i)
print("Symbol Table")
print(symbol_table)
print(symbol_loc)
print("\nLiteral Table")
print(literal_table)
print(literal_loc)
#f.close()
f2.close()
f3=open("intermediate.txt","r")
target=[]
for x in f3:
    trg=""
    line=(x[:-1].replace("(","")).replace(")",",").split(",")
    for i in range(0,len(line),2):

        if line[i]=="IS" or line[i]=="RG":
            trg+="("+line[i+1]+")"
        elif line[i]=="S":
            if i==0:
                continue
            code=int(line[i+1])
            trg+="("+str(symbol_loc[code])+")"
        elif line[i]=="L":
            code=int(line[i+1])
            trg+="("+str(literal_loc[code])+")"
        elif line[i]=="C":
            if line[i-2]=="AD":
                continue
            trg+="("+line[i+1]+")"
        elif line[i]=="AD" or line[i]=="DL":
            trg+="(-)"
    target.append(trg)

print("\n\nTarget Code:\n")

f3=open("target.txt","w")

for i in target:
    f3.write(i)
    f3.write("\n")
    print(i)