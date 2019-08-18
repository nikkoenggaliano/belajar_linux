//gcc nama.c -o nama
//socat tcp-l:1330,reuseaddr,fork exec:"./nama"
#include<stdio.h>
#include<stdlib.h>
#include<string.h>


char input[100];
int main(int argc, char *argv[]){
	setvbuf(stdin,0,2,0);
	setvbuf(stdout,0,2,0);
	printf("Belajar memebuat net service\n");
	printf("[+] Halo siapa namamu : ");
	scanf("%s", input);
	printf("Namammu adalah %s\n", input);
	return 0;
}

