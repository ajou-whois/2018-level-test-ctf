# pwnable2

## Description

### Description

```clike=
#include <stdio.h>
#include <string.h>
int main()
{
    int i = 0;
    int input = 0;
    scanf("%d", &input);

    if(input > 10)
    {
        printf("fail\n");
        return -1;
    }
    for(i=0;i<(unsigned int)input;i++)
        printf("Hi\n");
}
```
위 C 소스코드에서 일어날 수 있는 버그는 무엇일까요?
두 단어로 답을 입력하세요.
(대소문자 구분 안해도됨)

### Notices

* No Notices

### Hints

* No Hints

### Files

* No Files

## ETC
