#include<stdio.h>
#include<stdlib.h>
#include<string.h>

void print_flag()
{
	FILE *fp = fopen("./flag","rb");
	char flag_buf[128];
	memset(flag_buf,0,128);
	fread(flag_buf,1,128,fp);
	fwrite(flag_buf,1,128,stdout);
}

int main()
{
	int target;
	char buf[16];
	printf("your mission is to overwrite target variable to 0x61626364\n");
	printf("please check little endian well\n");
	scanf("%32s",buf);
	
	if(target==0x61626364)
	{
		print_flag();
	}
	else
	{
		printf("Wrong\n");
	}
}

