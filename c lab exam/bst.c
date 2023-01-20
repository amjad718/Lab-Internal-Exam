#include<stdio.h>
#include<stdlib.h>
struct node{
	int data;
	struct node* left;
	struct node* right;
};

struct node* insertion(struct node* newnode,int key){
	if(newnode==NULL){
		struct node* newnode= malloc(sizeof(struct node));
		newnode->data= key;
		newnode->left = NULL;
		newnode->right = NULL;
		return newnode;		
	}
	if(key< newnode->data){
		newnode->left = insertion(newnode->left,key);
	}
	if(key>newnode->data){
		newnode->right = insertion(newnode->right,key);
	}
	return newnode;
}

void inorder(struct node* root){
	if(root!=NULL){
	inorder(root->left);
	printf("%d\t",root->data);
	inorder(root->right);
}}

void preorder(struct node* root){
	if(root!=NULL){
	printf("%d\t",root->data);
	preorder(root->left);
	preorder(root->right);
}}

void postorder(struct node* root){
	if(root!=NULL){
	postorder(root->left);
	postorder(root->right);
	printf("%d\t",root->data);
}}

struct node* search(struct node* root,int key){
	if(root->data==key){
		printf("Item is in the tree");
		return root;
	}
	if(root==NULL)
		return root;
	if(key < root->data){
		root->left = search(root->left,key);
	}
	else if(key > root->data){
		root->right = search(root->right,key);
	}
	return root;
}



void main(){
	int choice,data,n,searchitem;
	struct node* root = NULL;
	do{
	printf("\n Enter the choice\n 1.Creation\n 2.Preorder\n 3.Inorder\n 4.Postorder\n 5.Searching\n 6.Insertion 0.Exit\n");
	scanf("%d",&choice);
	switch(choice){
		case 1: {
				printf("How many node you want to insert?\n");
				scanf("%d",&n);
				for(int i=0;i<n;i++){
				printf("Enter the data to insert:");
				scanf("%d",&data);
				root= insertion(root,data);}
				break;
				}
		case 2: {
				preorder(root);
				break;
				}
		case 3: {
				inorder(root);
				break;
				}
		case 4: {
				postorder(root);
				break;
				}
		case 5:{
				printf("Enter the key you want to search:");
				scanf("%d",&searchitem);
				root = search(root,searchitem);
				break;
				}
		case 6:	{
				printf("Enter the data to insert:");
				scanf("%d",&data);
				root= insertion(root,data);
				break;
				}
		default:printf("Invalid choice");
				break;
	}
	}while(choice!=0);
}
