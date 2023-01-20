#include<stdio.h>
#include<stdlib.h>
struct node{
	int data;
	struct node* prev;
	struct node* next;
}*head=NULL;

void create(){
	int n;
	struct node* newnode=malloc(sizeof(struct node));
	struct node* current;
	
	printf("Enter the data:");
	scanf("%d",&newnode->data);
	if(head==NULL){
		newnode->prev = NULL;
		newnode->next = NULL;
		head=newnode;
	}	
	else{
		current=head;
		while(current->next!=NULL){
			current=current->next;
		}
		newnode->prev=current;
		newnode->next=NULL;
		current->next=newnode;
		}
}

void display(){
	struct node* current;
	if(head==NULL){
		printf("The linked list is empty");
	}
	else{
		for(current=head;current!=NULL;current=current->next){
			printf("<-%d->\t",current->data);
		}
	}
}

void insert(){
	int item;
	struct node* newnode= malloc(sizeof(struct node));
	struct node* current;
	printf("Enter the location you want to insert the data");
	scanf("%d",&item);
	printf("Enter the node you want to insert");
	scanf("%d",&newnode->data);
	if(head==NULL){
		newnode->prev=NULL;
		newnode->next=NULL;
		head=newnode;
	}
	else{
		current=head;
		while(current->data!=item)
			current=current->next;
		newnode->next=current->next;
		newnode->prev=current;
		current->next=newnode;
		current->next->prev = newnode;
	}
	display();
}

void delete(){
	int item;
	struct node* ptr;
	ptr=head;
	head = head->next;
	head->prev= NULL;
	free(ptr);
	display();
}

void search(){
	int pos, count=1;
	struct node* current;
	current=head;
	printf("Enter the item you want to search");
	scanf("%d",&pos);
	while(current->data!=pos){
		current=current->next;
		count++;
	}
	if(current->data==pos){
		printf("The element is found at the %d position",count);
	}
	else if(current->data!=pos){
		printf("The element is not in the linked list");
	}
}

void main(){
	int choice;
	do{
	printf("\nEnter a choice\n 1.Creation\n 2.Insertion at middle\n 3.Deletion at the start\n 4.Searching of an element\n 5.Display\n 0.Exit");
	scanf("%d",&choice);
	switch(choice){
		case 1: create();
				break;
		case 2: insert();
			break;
		case 3: delete();
			break;
		case 4: search();
			break;
		case 5: display();
			break;
		default: printf("Invalid Choice");
			break;}
	}while(choice!=0);
}
