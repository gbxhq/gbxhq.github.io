---
title: LeetCode51-100
date: 2018-11-21 10:13:23
categories: Algorithm
tags: [LeetCode,Cpp]
---

`int的范围、牛顿迭代法`[[69]](#69x 的平方根)      `copy(1.begin,1.end,2.begin)、rbegin\rend`[[88]](#88合并两个有序数组)

<!---more--->

# 51N皇后
# 52N皇后 II
# 53. 最大子序和

暴力写出来了。人家怎么就想到这么写呢：

```cpp
int res = INT_MIN, curSum = 0;
for (int num : nums) {
    curSum = max(curSum + num, num);
    res = max(res, curSum);
}
return res;
```

# 54螺旋矩阵

# 55跳跃游戏

# 56合并区间

# 57插入区间

# 58.最后一个单词的长度

4行就解决的问题不明白为啥通过这么低

```cpp
istringstream is(s);
string tmp;
while(is>>tmp){}
return tmp.size();
```

# 59螺旋矩阵 II

# 60第k个排列

# 61旋转链表

# 62不同路径

# 63不同路径 II

# 64最小路径和

# 65有效数字

# 66. 加一

水

# 67. 二进制求和

- 二进制转了int。发现人家给的二进制数太大了int存不下--》换long，存不下。--》long long，存不下—》unsigned long long，存下了，加和以后存不下。😂。—》此方法卒。
- 纯字符判断的方法过了~没啥意思。

# 69 x的平方根

- int 的范围问题。本来用的int。结果人家给的输入。int平方之后就超过了范围了。以后要注意！
- 牛顿迭代法Mark。还可用用来解多次方程

# 70爬楼梯

其实就是斐波那契这题。我用递归写的。**但是！**我的写法，在输入是40以后，就超时咯（我特判了过的）。这么写不错：

```cpp
int climbStairs(int n) {
    if (n < 2) return 1;
    int dp0, dp1, dp;
    dp0 = dp1 = 1;
    for (int i = 2; i <= n; i++) {
        dp = dp0 + dp1;
        dp0 = dp1;
        dp1 = dp;
    }
    return dp;
}
```

# 68文本左右对齐
# 70爬楼梯
# 71简化路径
# 72编辑距离
# 73矩阵置零
# 74搜索二维矩阵
# 75颜色分类
# 76最小覆盖子串
# 77组合
# 78子集
# 79单词搜索
# 80删除排序数组中的重复项 II
# 81搜索旋转排序数组 II
# 82删除排序链表中的重复元素 II
# 83删除重复元素

- 删除节点光把当前节点赋NULL是不行滴。

# 84柱状图中最大的矩形
# 85最大矩形
# 86分隔链表
# 87扰乱字符串
# 88合并两个有序数组

🙂🙂🙂

一晚上我没做出来这题

- 结束void函数，直接`return;`

- 看了提示。从后往前插入。写出来了。速度不行。看一下这个0ms的：

  ```cpp
  void merge(vector<int>& nums1, int m, vector<int>& nums2, int n) {
      auto b1 = nums1.rbegin() + n, b2 = nums2.rbegin();
      for (auto cur = nums1.rbegin(); b1 != nums1.rend(); ++cur)
      {
          if (b2 == nums2.rend())
              return;
          if (*b2 < *b1)
              *cur = *b1++;
          else *cur = *b2++;
      }
      copy(b2, nums2.rend(), nums1.rend() - (nums2.rend() - b2));
  }
  ```

# 89格雷编码
# 90子集 II
# 91解码方法
# 92反转链表 II
# 93复原IP地址
# 94二叉树的中序遍历
# 95不同的二叉搜索树 II
# 96不同的二叉搜索树
# 97交错字符串
# 98验证二叉搜索树
# 99恢复二叉搜索树
# 100.相同的树

先来看我之前写法：

```cpp
bool isSameTree(TreeNode* p, TreeNode* q) {
    if(p&&q)
        if(p->val!=q->val)
            return false;
    if(p&&!q)
        return false;
    if(q&&!p)
        return false;
    if(!p&&!q)
        return true;
    if(p->left&&q->left) //加上这个if条件是因为不然会因为p\q指向空指针报这个错：member access null pointer of type 'struct TreeNode'
        isSameTree(p->left,q->left);
    if(p->right&&q->right)
        isSameTree(p->right,q->right);
    return true;
}
```

这写法过不了。师哥改：

```cpp
bool isSameTree(TreeNode* p, TreeNode* q) {
    if(p&&q)
        if(p->val!=q->val)
            return false;
    if(p&&!q)
        return false;
    if(q&&!p)
        return false;
    if(!p&&!q)
        return true;
    return isSameTree(p->left,q->left)
        &&isSameTree(p->right,q->right)
        &&p->val==q->val;
}//直接返回两个结果&&起来不就解决了吗。这样有一边走到了false都会返回false
```

