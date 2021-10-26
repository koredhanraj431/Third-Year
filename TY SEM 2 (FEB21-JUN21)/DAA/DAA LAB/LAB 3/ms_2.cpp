#include <bits/stdc++.h> 
using namespace std; 
  
struct node { 
    int key; 
    int c = 0; 
    struct node *left, *right; 
}; 
  
// create BST node 
struct node* newNode(int item) 
{ 
    struct node* temp 
        = (struct node*)malloc(sizeof(struct node)); 
    temp->key = item; 
    temp->c = 1; 
    temp->left = temp->right = NULL; 
    return temp; 
} 
  
// BST insert
struct node* insert(struct node* node, int key, int& ma) 
{ 
    if (node == NULL) { 
        if (ma == 0) 
            ma = 1; 
  
        return newNode(key); 
    } 
  
    if (key < node->key) 
        node->left = insert(node->left, key, ma); 
    else if (key > node->key) 
        node->right = insert(node->right, key, ma); 
    else
        node->c++; 
  
    ma = max(ma, node->c); 
  
    return node; 
} 
  
// inorder traversal of BST 
void inorder(struct node* root, int s) 
{ 
    if (root != NULL) { 
        inorder(root->left, s); 
  
        if (root->c > (s / 2)) 
            cout<<"\nMajority element is : "<< root->key<< "\t Element count is "<<root->c<<"\n\n"; 
  
        inorder(root->right, s); 
    } 
} 

int main() 
{ 
    int n;
    cout << "\nEnter the no of elements in an array : ";
    cin >> n;
    int a[n];
    cout << "\nEnter elements in an array : ";
    for (int i = 0; i < n; i++)
    {
        cin >> a[i];
    }
  
    struct node* root = NULL; 
    int ma = 0; 
  
    for (int i = 0; i < n; i++) { 
        root = insert(root, a[i], ma); 
    } 
  
    if (ma > (n / 2)) 
        inorder(root, n); 
    else
        cout << "Majority element not found!\n"; 
    return 0; 
}