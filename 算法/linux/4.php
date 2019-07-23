linux第四天

bash:

	查看命名是否执行成功 $? 记住知识返回上一个命令的成功或失败的结果，如果是0表示执行成功，非0表示执行失败

    定义变量  a=1

    输出变量的值  echo $a

    环境变量： 

    	输出 echo $PATH
    	定义： 存放预定义的路径，一般是 各种命令的存放路径

    	查找环境变量中的路径，找到第一个匹配的命令所在的文件夹就终止

    	/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/root/bin

    	linux路径以: 分隔 window中以;分隔
    	从第一个路径开始查找，查到就停止，查不到就报错

        换行符: linux \n
                window \r\n
                ios   \r


    PATH = $PATH:/usr/local
    export PATH;


    env 打印出来所有的环境配置
    set 不传参表示打印 传参可以环境变量

    当出现中文乱码的时候使用 export LANG=zh_CN.UTF-8即可

    export PS1=[\u@\h \W]\$

            \u 用户
            \h 主机
            \W 相对路径
            \w 绝对路径


    free 查看内存使用情况

    查看进程 
    	ps 打印一次所有进程 
            ps aux   ps -ef 
    	top 动态显示进程情况

    启动一个进程并且在后台执行  &
    kill -9 pid        kill 4019
    pkill 程序名字  pkill a

    定时任务

    crontab -l 查看任务
    crontab -e 编辑

        * * * * * user command
        分时日月周
        * * 3 * * 
        * */1 * * *

        service crond restart

    at 到具体时候执行什么命令

       每天晚上0点关机

    at 17:30 2019-07-16
    > poweroff
    > [ctrl+D]

    atq 查看








1. 命令的执行顺序

	多个命令;  顺序执行
	&&  第一个执行成功，则执行后面的
	||  第一个执行成功，则后面不执行

	cat 1.php && echo abc || grep zhangbanghao 1.php

	cat 1.php && echo abc || grep zhangbanghao 1.php

	不会执行grep

	cat 1.php || echo abc && grep zhangbanghao 1.php

	不会执行echo命令

	linux下命令是由左向右执行的

	
2. 管道 

	管道：将左边命令的输出当作右边命令的输入
	管道符号： |

3. 匹配

	grep 规则  文件名或者变量名

	grep abc a.txt
	grep -i abc a.txt 忽略大小写
	grep -n abc a.txt 显示匹配到的内容以及行号

	grep -E '^b' a.txt 匹配以b开头的行
	egrep 正则表达式 a.txt 

	egrep '^$' a.txt 显示空行
	egrep -v '^$' a.txt  显示非空行

4. 输出
	
	echo abcd 输出abcd

    

5. 重定向

	输出重定向  >(输出并新建)  >>(输出、追加)
	输入重定向  <(输入) <<(输入追加)

	stdin 输入文件，默认从键盘输入  0
	stdout 输出文件，默认输出屏幕   1
	stderr 错误文件，默认是输出屏幕 2