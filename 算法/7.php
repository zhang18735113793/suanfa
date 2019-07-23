php中的错误处理

	Deprecated  不推荐使用
	warning     只提示不终止程序
	notice	    

	终止程序的错误
	Parse error  语法错误
	fatal error  


错误发生 分为 错误报告 和 错误显示

	error_reporting(E_ALL)
	error_reporting(0) // 不报告任何错误

	display_errors off  // 是否显示错误

	error_log error_log = php_errors.log  设置错误日志的路径
	log_errors  log_errors = On  开启错误日志的开关

错误级别：
	E_CORE_*   php启动过程中的错误
	E_COMPILE_*  php编译程序过程中错误
	E_USER_*   用户自定义的错误

	E_ALL      所有错误
	E_WARNNING  运行时警告
	E_NOTICE   运行时的通知
	E_ERROR    运行时的致命错误
	E_PARSE    编译过程的语法错误


错误接管：

	set_exception_handler  接管异常
	set_error_handler      接管错误
	register_shutdown_function  接管脚本运行最终的错误


异常 ： 一般人为的  基类 Exception


错误 ： 不符合php程序本身要求的

php7.0之后  exception error都实现Throwable接口