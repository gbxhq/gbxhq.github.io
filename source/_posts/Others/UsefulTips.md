---
title: UsefulTips
date: 2018-07-25 21:04:09
categories: Others
tags: [tips,Shell,iTerm2,Markdown,Mac,Heroku]
---

偏技术性的小姿势

<!---more--->

# Shell相关

- `touch xxx.x` 新建文件

- `ls -a`查看隐藏文件包括“.”和“..” `-A`不包括“.”和“..”目录

  `-C` 按列列出文件

- 清屏: edit菜单里找。Terminal:`⌃+⌘+L` iTerm:`⌘+K`

- 删除文件：`rm -f` -f后不会给任何提示。 -i是交互式删除

  删除文件夹 -r

- 查找


## 自动运行命令脚本

shell命令写在记事本存成 1.sh

shell里运行`sh 1.sh`即可

关于需要输入密码时的交互：

```bash
ssh tester@192.168.139.218 << EOF #用 <<EOF 分割。这里就是输密码的地方
cd kurento/kurento-tutorial-java/kurento-group-call
mvn exec:java
```

## 终端走代理

参考：[让终端走代理的几种方法](https://blog.fazero.me/2015/09/15/%E8%AE%A9%E7%BB%88%E7%AB%AF%E8%B5%B0%E4%BB%A3%E7%90%86%E7%9A%84%E5%87%A0%E7%A7%8D%E6%96%B9%E6%B3%95/)

## Finder和终端快速转

- Finder到终端：拖窗口到终端界面
- 终端到Finder：`open .`

# iTerm2

## 添加alias

在 `.zshrc`这个文件里配置

注意例子：`alias blog="cd Documents/Hexo"`

其中`blog="xxx"`等号两边不允许有空格！不然alias会失效。

## 美化

参考文章：https://www.cnblogs.com/kenz520/p/8259432.html

- iTerm2 -> Make iTerm2 Default Term

- 配色：http://ethanschoonover.com/solarized

- oh_my_zsh：https://github.com/robbyrussell/oh-my-zsh

  装好后配置主题：

  - 修改`~/.zshrc`文件的ZSH_THEME=“”属性为"agnoster"

- 字体：

  克隆这个仓库到本地：https://github.com/powerline/fonts.git

  运行里面的 `install.sh` 就装好了

## 拓展

- 命令提示与补全

  1. 克隆仓库到本地 ~/.oh-my-zsh/custom/plugins 路径下
     `git clone git://github.com/zsh-users/zsh-autosuggestions $ZSH_CUSTOM/plugins/zsh-autosuggestions`
  2. 用 vim 编辑 .zshrc 文件，找到插件设置命令，默认是 `plugins=(git)` ，我们把它修改为`plugins=(zsh-autosuggestions git)`

  PS：当你重新打开终端时可能看不到变化，可能你的字体颜色太淡了，我们把其改亮一些：

  1. `cd ~/.oh-my-zsh/custom/plugins/zsh-autosuggestions`
  2. 用 vim 编辑 zsh-autosuggestions.zsh 文件，修改`ZSH_AUTOSUGGEST_HIGHLIGHT_STYLE='fg=10'`

- 语法高亮效果

  1. 使用homebrew包管理工具安装 zsh-syntax-highlighting 插件
     `brew install zsh-syntax-highlighting`
     如果电脑上还没有安装homebrew，请先安装homebrew
     `/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"`
  2. 配置.zshrc文件，插入一行
     `source /usr/local/share/zsh-syntax-highlighting/zsh-syntax-highlighting.zsh`
  3. 加载.zshrc配置
     `source ~/.zshrc`
  4. 重新打开iTerm2窗口（或新打开一个iTerm2窗口）即可以看到效果


## 其他

1. iTerm2 默认使用bash改用zsh解决方法：`chsh -s /bin/zsh`
2. iTerm2 zsh切换回原来的dash：`chsh -s /bin/bash`
3. 卸载`oh my zsh`，在命令行输入：`uninstall_oh_my_zsh`
4. 路径前缀的XX@XX太长，缩短问题：
   编辑`~/.oh-my-zsh/themes/agnoster.zsh-theme`主体文件，将里面的`build_prompt`下的`prompt_context`字段在前面加`#`注释掉即可



# Markdown相关

## Markdown 写上标下标

1. HTML

    ```
    <!--利用HTML-->
    <sub>上标</sub>
    <sup>下标</sup>
    ```
    例如
    `X<sub>1</sub>` ==> X<sub>1</sub>
    `Y<sup>2345</sup>` ==>Y<sup>2345</sup>

2. MathJax
MathJax不仅可以打上下标，还可以打双标。
> （1）两个符号$$中间是公式的内容
> （2）^ 符号后接的字符为上标 
> （3）_ 符号后接的字符为下标 
> （4）如果同时有两个下标，则需要使用{}来将符号括起来 

如：`$x^p_{ij}$` ==> $x^p_{ij}$




# Mac相关

## 环境变量问题

1. 在`.bash`的文件中加路径
    - zsh则是添加到 `.zshrc`中 
2. 手动放快捷方式到`usr/bin`或`usr/local/bin`目录下

> 延伸：Mac系统的bash环境变量，加载顺序为：
> /etc/profile
> /etc/paths
> ~/.bash_profile
> ~/.bash_login
> ~/.profile
> ~/.bashrc

设置PATH的语法都为：

```bash
#中间用冒号隔开
export PATH=$PATH:<PATH 1>:<PATH 2>:<PATH 3>:------:<PATH N>
```

## 显示/隐藏文件

在Finder：`Command+Shift+.`

## .app已损坏 打不开 

`sudo spctl --master-disable`

## 打开macOS原生的NTFS

- `diskutil list` 找到你要写入的磁盘名

- **开启读写NTFS：**

  `sudo vim /etc/fstab`

  在这个fstab文件里加入一句：

  **`LABEL=你的磁盘名字 none ntfs rw,auto,nobrowse`**

   `:wq `  保存退出

- 重新插入U盘  （此时桌面上看不到了）

   在Finder里 ⌘+⇧+G 输入 `/Volumes` 


## Mac终端下出现bogon的解决办法

`sudo scutil --set HostName your-hostname`

## Mac更改MAC地址（外接网卡）

`sudo ifconfig en9 ether aa:bb:cc:dd:ee`

但是我外接了Type-C转网线的口，找到对应的也是en9，命令运行后，再用`ifconfig`看发现mac地址并没有更改成功。
在网上又搜了搜，原来需要**装驱动**。
这篇文章对这个问题写得相当明白了：https://blog.csdn.net/u014051620/article/details/75050934

## 10.14以后Safari装扩展

cd到有 `.safariextz`文件的目录。

执行`xar -xf 拓展名.safariextz` 就可以解包

然后添加扩展，运行即可。详细教程：https://sspai.com/post/47303

# Sublime相关

这几个问题怕是用过sublime的都解决过吧~记录一下防止下次碰到再百度了。

<!--more-->

## 加入subl命令

`sudo ln -s '/Applications/Sublime Text.app/Contents/SharedSupport/bin/subl' /usr/local/bin/subl'`

## Sublime3屏蔽更新

`"update_check": false,`

<!---more--->
1. 
    Setting-User里添加`"update_check": false,`
    **一定要带，**
    **一定要带，**
    **一定要带，**

2. 
    再从网上找个能用的序列号：

----- BEGIN LICENSE -----
sgbteam
Single User License
EA7E-1153259
8891CBB9 F1513E4F 1A3405C1 A865D53F
115F202E 7B91AB2D 0D2A40ED 352B269B
76E84F0B CD69BFC7 59F2DFEF E267328F
215652A3 E88F9D8F 4C38E3BA 5B2DAAE4
969624E7 DC9CD4D5 717FB40C 1B9738CF
20B3C4F1 E917B5B3 87C38D9C ACCE7DD8
5F7EF854 86B9743C FADC04AA FB0DA5C0
F913BE58 42FEA319 F954EFDD AE881E0B
------ END LICENSE ------

2017.7.1可用

## 中文乱码问题

安装`ConvertToUtf8`和`GBK`两个包

## 支持C++11

tools-->new build sys

输入：

```
{
    "cmd": ["bash", "-c", "g++ '${file}' -std=c++11 -stdlib=libc++ -o '${file_path}/${file_base_name}'"],
    "file_regex": "^(..{FNXX==XXFN}*):([0-9]+):?([0-9]+)?:? (.*)$",
    "working_dir": "${file_path}",
    "selector": "source.c, source.c++",
    "variants":
    [
        {
        "name": "Run",
        "cmd": ["bash", "-c", "g++ '${file}' -std=c++11 -stdlib=libc++ -o '${file_path}/${file_base_name}' && open -a Terminal.app '${file_path}/${file_base_name}'"]
        }
    ]
}
```

保存的时候注意后缀不要改，是`.sublime-build`

如果想调用iTerm2把里面的`Terminal.app`换成`iTerm.app`就行了。

换成iTerm之后程序执行完iTerm会自己关闭窗口，需要在设置里修改一下默认配置文件：

![20180904153603023933676.png](http://p66eruxmw.bkt.clouddn.com/20180904153603023933676.png)


# Heroku

## 连接PGSQL

想给紫玉搭一个Typecho的博客，结果得用pgsql的数据库。

1. 添加环境扩展：https://elements.heroku.com/addons/heroku-postgresql
2. 添加好后点Setting可以看到数据库名啥的，正常配置即可

