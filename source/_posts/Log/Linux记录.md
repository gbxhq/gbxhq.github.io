---
title: Linux记录
date: 2019-03-26 15:02:45
categories: Log
tags: Linux
---

太多框架都是Linux跑起来更好了。给台式机装了个Ubuntu，用Macbook ssh登进去操作。这样一来纯命令行操作和服务器一样了。Ubuntu的那些`dpkg` `tar` 的常用命令都得好好记一下了。

<!---more--->

# Linux

- 切换到root `sudo su`

- 退出：ctrl+D或`exit`或 `logout`

- `cp` 复制文件夹记得 `-r` 递归地复制

- **赋权限：**
  `chmod -R 755 /home/fb`

  **赋所有者权限**
  `chown -R root:root /home/fb`

  `-R`是递归整个文件夹

- 创建root用户

  ```shell
  useradd zoey #建用户
  passwd zoey #改密码
  ```

  给root权限

  修改/etc/passwd文件，找到如下有用户名的行，把用户ID修改为0

  ![](https://0pic.oss-cn-beijing.aliyuncs.com/ubuntuuserroot.png)

- 给某个用户换成zsh:

  `chsh -s /bin/zsh/ zoey`

- 

## 安装SFTP

1.安装sftp服务

`sudo apt-get install openssh-server`

2.修改配置文件

`sudo vim /etc/ssh/sshd_config`

```
##下面这行注释掉
#Subsystem sftp /usr/libexec/openssh/sftp-server
##后面加入
Subsystem sftp internal-sftp

找到PermitRootLogin no一行，改为PermitRootLogin yes   让root用户可以登录SFTP
```

3.重启sshd服务

`service ssh restart`

## apt-get install E: 无法定位软件包问题

在etc/ap的sources.list 添加镜像源

`deb http://archive.ubuntu.com/ubuntu/ trusty main universe restricted multiverse`

然后` sudo apt-get update ` 

接着安装就可以了

# MySQL

进入mysql

`mysql -u 用户名 root -p` 然后会让你输密码

不知道用户名密码：

etc/mysql 目录下的 debian.cnf 文件里

MySQL目录、默认的数据文件存储目录为/var/lib/mysql。

# Vim

vim都学了无数次了。但图形界面下我无法拒绝VS Code。这回不得不用vim的时候，还是把该记的记一记吧。

重新拿起来这分曾经的[教程](../fun/vimtutor_cn)

- `:q!` 不保存退出
- `x` 删除
- `$` `0` `^ ` 定位到行尾、首
- `w` `e` 下一个单词首/尾
- `G` `gg` `Ctrl+g ` 文件末行/首行 定位信息
- `u` `U` `Ctrl+R` 恢复/恢复整行 撤销恢复
- `p ` 粘贴
- `r` 代替
- `c/d`+`数字`+`对象`  更改/删除
- `/` `?` n/N  搜索   CTRL-O 使你返回到以前的位置，CTRL-I 回到以后的位置
- `%`  放在括号上可以匹配括号
- :s/a/b  替换   type   :#,#s/old/new/g    其中，#,#是要更改的行号的范围
       Type   :%s/old/new/g      更改全文件中的所有事件。
       Type   :%s/old/new/gc      更改全文件中的所有事件,并给出替换与否的提示。  
- `yw`复制单词  `yy`复制整行 前面加数字是复制n行

# SSL

参考文章：<https://www.jianshu.com/p/e321cc362e5d>

报错：`ImportError: No module named 'requests.packages.urllib3'`

解决：`pip install --upgrade --force-reinstall 'requests==2.6.0' urllib3`