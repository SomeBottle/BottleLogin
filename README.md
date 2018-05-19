# BottleLogin
## 简单的，无须数据库的登录系统，基于PHP
#### 具体内容在示例页面examplepage.php里面有介绍。
----------------------------------
## 在使用BottleLogin之前，请访问m.php进行初始化
----------------------------------
#### m.php?t=login用来显示注册页面
#### m.php?t=reg用来显示登录页面
#### m.php?t=rpass用来修改密码
#### v.php?do=logout用来登出
----------------------------------
检测登录API为o.php,  
在**sessionstart**的前提下,引用o.php，可以用checklogin()检查是否登录，若没有登录将被强行送到m.php?t=login.  
checkrefer()若检查已经登录，则跳转到指定的页面.
## 新增:
**setprofile(用户，属性，内容); ** 来给用户设置某一项特殊的属性  
**getprofile(用户，属性);** 可以获取设置的属性内容  
**removeprofile(用户，属性); **可以移除用户的某一项属性  
### [例如]
```
setprofile('Sobo','exp',4);
getprofile('Sobo','exp'); //return : 4  
```
另外，如果找不到用户，会返回false  

----------------------------------
## 极速登录模式
config文件里oldmode选项调为yes可以使登录界面最低兼容诺基亚且极速。
----------------------------------
#### 在lconfig路径里有一个配置文件，可以对该登录系统进行基本配置
#### DEMO:http://lab.imbottle.com/bottlelogin/
- DEMO USER:Sobo
- DEMO PASSWORD:123456
