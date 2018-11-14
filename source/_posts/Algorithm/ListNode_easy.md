---
title: LeetCode 链表Esay题
date: 2018-09-06 14:30:53
categories: [Algorithm]
tags: [Cpp,LeetCode]
---

知识点：`ListNode单链表`、 快慢指针

<!---more--->

# 基础部分

这段代码便于在IDE调试。

```cpp
#include<iostream>
using namespace std;
typedef struct ListNode
{
    int val;
    struct ListNode *next;
    ListNode(int x):val(x),next(NULL){} 

}ListNode;
ListNode *cr3237ateList()
{
    ListNode *prehead = new ListNode(-1);
    return prehead;
}
ListNode *initList(ListNode *preheadInit)
{
    int a[] = {1,2,3,4,5};
    ListNode *cur,*head;
    cur = preheadInit;
    for(int i = 0;i < sizeof(a)/sizeof(a[0]);i++)
    {
        ListNode *p = new ListNode(a[i]);
        cur->next = p;
        cur = cur->next;
    }
    head = preheadInit;
    return head->next; 
}
void showList(ListNode *head)
{
    while(head)
    {
        cout << head->val << "_";
        head = head->next;
    }
}
int main()
{
    ListNode *prehead = createList();
    ListNode *head = initList(prehead);
    showList(head);
}
```

# 21 合并有序链表

## 解

不贴我的了。写的太烂了。新建了一个链表一个数一个数插进去的。

贴一个同效率的。简洁好多。

```cpp
/**
 * Definition for singly-linked list.
 * struct ListNode {
 *     int val;
 *     ListNode *next;
 *     ListNode(int x) : val(x), next(NULL) {}
 * };
 */
class Solution {
public:
    ListNode* mergeTwoLists(ListNode* l1, ListNode* l2) {
        ListNode* l0;
        
        ListNode* head=new ListNode(-1);
        l0=head;
        while(l1!=NULL&&l2!=NULL)
        {
            if(l1->val<=l2->val) 
            {
                l0->next=new ListNode(l1->val);
                l1=l1->next;
            }
            else 
            {
                l0->next=new ListNode(l2->val);
                l2=l2->next;
            }
            l0=l0->next;
        }
        l0->next = l1 ? l1 : l2;
        return head->next;
    }
};
```

~ 知识点

- 一个是建ListNode。声明节点的细节。`new struct`

- 一个就是重要的技巧。别声明一个新指针为NULL。除非你开车很稳。

  - 关于`NULL`和`nullptr`:

    `NULL`其实是**int型的0**，为了**真正的空指针**，c++11推出`nullptr`

- 可以先声明一个随意值的节点(比如-9999)，然后在这个节点后面处理就好了。最后return时返回这个节点的next就好了。

## Problems

- 输入是`[]和[0]`的时候不行。没考虑第一个链表就是空的情况。所以开头定义tmp就直接指向L1；

- **重要！！！**

  新声明一个**节点**`new struct`。和新声明一个**指针**`*p`不一样。

  这个问题要想清楚！！！

- 记得要先把头存起啦啊。不然你移来移去拿什么返回链表头。
- 循环遍历所有节点最好用`while(list->next)`。这样指针刚好停在最后一个节点。

## 递归的解法

```cpp
class Solution {
public:
    ListNode* mergeTwoLists(ListNode* l1, ListNode* l2) {
        if(l1==NULL || l2==NULL) return (l1==NULL ? l2: l1);
        if(l1->val<l2->val) 
        {
            l1->next=mergeTwoLists(l1->next, l2);
            return l1;
        }
        else
        {
            l2->next=mergeTwoLists(l1,l2->next);
            return l2;
        }
        
    }//end function
};
```

**合并**两个链表。就是判断完**头**元素后。**合并** <u>剩下的部分</u> 连接到 小的头里。

结束条件：

如果一个为Null（总是合并剩下的部分一定会遇到null）则返回另一个。

---

基本功啊。

准备多做几个链表题来巩固一下了。

# 237 删除某个节点

这个比较简单。操作指针就好了。

注意此题简单的一个重要条件就是：

**给点节点为非末尾节点**

这样就不会有删除最后一个节点的情况。

# 876 链表的中间节点

简单。计数器判断。

# 206 反转链表

我用递归做的。

思路是，把第一个节点取出来。然后从第二个开始反转，反转的结果再接上第一个节点。

## Problems

开始我取第一个节点是直接一个指针指向head。这样虽然取到了。但是这个节点的next不是NULL啊。而是2号到最后。

后来用的方法是new一个新的空间。（相当于是取出来了第一个节点的**值**吧）

然后再把后面的反转之后，接上这个new的节点。

## 解

```
ListNode* reverseList(ListNode* head) {
	if(head == NULL)//输入竟然有空的情况。不得不加这么一个判断。
		retrun head;
    if(head->next == NULL){
        //这里也要声明新的节点。不然又是原来的头地址，串起来了。
        ListNode *p = new ListNode(head->val);
        return p;
    }
    else
    {
        ListNode* p = new ListNode(head->val);
        ListNode* tmp = reverseList(head->next);
        //要把 头部 预存一下。不然下面的while就让tmp走到尾部了。
        ListNode* ans = tmp;
        while(tmp->next){
            tmp = tmp->next;
        }
        tmp->next = p;
        return ans;
    }       
}
```

要点就是我备注的两个地方了。

但是我这个写法。光顾着递归了。效率是排行倒数。人家第一的递归写法：

```cpp
if(head==NULL||head->next==NULL)
    return head;
ListNode *res=reverseList(head->next);
head->next->next=head;
head->next=NULL;
return res;
```

这就是另一个境界的思想问题了。

他的解法也是把第一个取出来。把后面的反转了接上第一个。

**但是**，人家是在地址上操作的。我是新开辟空间的。

直接把两个一组。`head->next->next=head;`这句是精华。

然**2号**的下一个变成**1号**，再让**1号**的下一个变成null。成功调换1-2的位置为2-1-null、

而**2号**其实在上一次的递归中，已经被它的上一个3号所指向。即3->next就是2号、

> 启发。递归的时候可以倒着思考问题。
>
> 思路是把第一个拿出来。再把剩下的做reverse()处理后返回。
>
> 返回的时候返回的就是**已经反转完成的链表的头**。别想别的。
>
> 思考最后递归的倒数第二层是什么情况（比如这题就是还剩俩节点）。

# 83 删除重复元素

- 删除节点光把当前节点赋NULL是不行滴。


# 203 删除链表中的节点

和237题不同的是这个题是给了值。237题给的是节点。

感悟和上一个#83题查不多。就是想删除某个节点。只把 cur指针赋NULL是不行的。因为**上一个节点的next 还指着 之前 cur的地址**啊。cur是为空了，上一个节点的next不是空啊。

因为觉得删最后一个节点的情况不好写。转递归法一气呵成哈哈。

```cpp
ListNode* removeElements(ListNode* head, int val) {
    if(head==NULL)
        return head;
    if(head->next == NULL){
        if(head->val == val)
            return NULL;
        else
            return head;
    }
    if(head->val == val)
        if(head->next)
            return removeElements(head->next,val);
        else
            return NULL;
    else
    {
        head->next = removeElements(head->next,val);
        return head;
    }
}
```

当然效率一般。超越了96%。我再参考下别的。

- 处理最后一个节点的方法。可以再声明一个指针p。一个指针往下移。p不移动。这样就可以定位倒数第二的节点。

- 下面这个解法很清晰了。

  ```cpp
  if (head == NULL)
  	return head;
  ListNode phead(0);
  ListNode *ptemp = head;
  ListNode *p = &phead; //phead是一个结构体。所以要指向它的地址。
  //也可以在之前就声明ListNode* phead = new ListNode(9999);就不用取地址了。
  phead.next = ptemp;
  while (1)
  {
      if (ptemp->val == val)
      {
          p->next = ptemp->next;
          ptemp = p->next;
      }
      else
      {
          p = ptemp;
          ptemp = ptemp->next;
      }
      if (ptemp==NULL)
          break;
  }
  return phead.next;
  ```

# 234 回文链表

- 注意。长度为1的链表也是回文的。

- 我的方法比较笨。先跑一遍记录有多少个数。再遍历前半部分，把数存到栈里。再遍历后半部分。挨个出栈。
- 下面看一个知识点，

## 快慢指针

> 知识点：快指针走两步。慢指针走一步。快指针到链尾。慢指针到中间。

```cpp
bool isPalindrome(ListNode* head) {
    ListNode *pre = nullptr, *cur = head, *quick = head;
    //下面这一段很巧妙。不仅找到了中间节点。还把链表的前半部分都倒置了存在pre里。
    //倒置的方法：
    //1.预存当前节点cur到tmp，
    //2.cur后移，保证下一步进行。但我们有tmp预存了cur。
	//3.tmp的next置为pre(初始的pre刚好是NULL)。
    //4.pre=tmp。这时候pre已经是倒置链表的头。
    while (quick && quick->next) {
        quick = quick->next->next;
        auto tmp = cur;
        cur = cur->next;
        tmp->next = pre;
        pre = tmp;
    }
    if (quick != nullptr)
        cur = cur->next;
    while (cur) {
        if (cur->val != pre->val)
            return false;
        else {
            cur = cur->next;
            pre = pre->next;
        }
    }
    return true;
}
```

- 最后说一下排行第一的方法。人家没存到栈里。存到了向量里。然后直接用坐标定位来判断首尾是否一样。我真的是太定向思维了。看到是从中间往两侧判断就知道用栈。辣鸡~

# 141环形链表

>  知识点：如果有环，快慢指针一定会相遇。可用递归法证明。

# 160 相交链表

我用了一个set保存A的每个地址。

然后对着B进行set.find()。过。关闭输入输出同步之后效率从29升到87~哈哈。

# 707设计链表

不想做😛😛😛

【链表+简单】刷完~

下一站，【字符串】

