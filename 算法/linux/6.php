shell 

	 date 查看当前日期
	 cal  查看日历

	 `date`  
	 $( date )

	 if [-f file.txt] ; then

	 fi

	 case $变量名称  in 
		   "第一个变量"）
		        程序段
		        ;;
		   "第二个变量")
		        程序段
		        ;;
		   *)
		        程序段
		        ;;
	 esac

	 for var in con1 con2 con3
	 do
        程序段
	 done

	 $1 表示接收的第一个参数



	 解压缩命令

	 	归档文件 tar 
	 	压缩文件 
	 		gzip  
	 			gunzip
	 		bzip2 

	 	tar -c -x -v -f -g -z 
	 		-c : 创建tar包
	 		-x : 解压tar包
	 		-v : 显示过程
	 		-f : 创建的文件或者要解压的文件名
	 		-j : 压缩方式 bzip2
	 		-z : 压缩方式 gzip


	 挂载

	 	mount -t iso9660 /dev/cdrom /mnt/cdrom

	 	umount /dev/cdrom
linux

	vi/vim 编辑器
		vi/vim 文件名  表示新建但此时文件不存在

	命令模式 

		复制   (lines)yy  5yy 20yy 跟编辑模式下光标的位置相关
		粘贴   p    跟编辑模式下光标的位置相关
		删除   (lines)dd  5dd 20dd  
		撤销   u     U 撤销对整行的操作

		D 删除当前字符至行尾
		:1,10d 删除1-10行
		:11,$d 删除11行及以后所有的行 
		:1,$d 删除所有行

		移动光标  20j就是向下移动20行，5h就是向左移动5个字符
		w 往后移动一个单词
		0 移动到当前行的第一个字符
		gg 移动到文件头
		G 移动到文件尾
		ctrl+e向下滚动一行
		ctrl+y向上滚动一行


	末行模式

	退出相关	:w  :wq :q  :wq!
	显示行号	:set nu   :set nonu
	查找        :/ 往下查  :? 往上查
	替换        r  4r 将4个字符替换成后面的字符
				:%s/old/new/g 全部替换
				:%s/old/new   替换所有行的第一个匹配
				:s/old/new    替换当前行的第一个匹配
				:s/old/new/g  用old替换new，替换当前行的所有匹配
				:16,19 s/^/ /g 表示在16行至19行前添加空格
				:%s/\$str/\$abc/g 

	编辑模式	

		进入编辑模式： i a o
		退出编辑模式： ESC


用户的配置文件

	用户信息 /etc/passwd
	密码     /etc/shadow

	su 切换用户
	sudo 使用root权限调用命令 

	生成用户的默认配置文件  /ect/default/useradd  每个用户的默认个性化配置 /etc/skel  隐藏文件

	.bash_logout 当用户退出登录的时候你想干的事情

	.bash_profile 当前用户的个性化配置

		当该用户登录的时候会执行该文件中所有指令

		可以在该文件中添加当前用户登陆后的个性化的配置，比如说别名 修改环境变量

		修改完后要使用source .bash_profile 使修改在当前会话中生效，如果不执行则在下次登录时生效



	.bashrc      默认加载全局的用户配置

		/etc/profile.d/*.sh
		比如让所有用户都可以执行bx命令 在/etc/profile.d目录下创建一个文件以.sh结尾 写入alias bx="vim"


	.bash_history  
		存放当前用户使用过的命令，只有当用户退出登录的时候才会将当次用户操作的所有命令保存到该文件中

		history  查看历史命令
		history  n 显示n行历史命令

		HISTCONTROL=ignoredups
		HISTFILE=/root/.bash_history
		HISTFILESIZE=1000
		HISTSIZE=1000


目录：

	cd /


	bin 存放命令
	boot 存放操作系统启动相关的
	dev 设备文件目录
	etc 配置文件所在目录
	home 除root用户的其他用户的家目录所在

	mnt 挂载点

	proc 进程文件

	root root用户的家目录

	tmp 临时目录

	usr 存放用户安装的文件，配置，命令

		usr/local 放用户安装程序目录
	
	var 存放变量的目录

		/var/www
		/var/log 日志文件目录


网络操作

	访问远程地址  curl   wget


安装Composer




		
