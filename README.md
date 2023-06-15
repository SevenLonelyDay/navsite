Nav 是一款开源免费的书签（导航）管理程序，界面简洁，安装简单，使用方便。Nav可帮助你将浏览器书签集中式管理，解决跨设备、跨平台、跨浏览器之间同步和访问困难问题，做到一处部署，随处访问。

- **演示站**: [http://two.lm21.top](http://two.lm21.top) 
- **仅供体验,定期清理数据** 账号密码`admin`


### 运行环境
* PHP: 7.3 - 8.2 
* 数据库: SQLite3 或 MySQL > 5.6.0

### 部署

### 修改数据库文件
* 在`data/config.php.bak` 复制到`data`目录下面并重命名为`config.php`

#### nginx配置
* 修改`config`目录下的`default.conf` 文件为自己Nginx环境下的配置


#### docker
在当前目录下执行
```
docker-compose up
```
* 进入php 容器中安装mysql

```
docker exec -it nav-php-server bash -c "docker-php-ext-install pdo_mysql mysqli sockets gettext opcache"
```

### 功能特色
* 支持后台管理
* 支持私有链接
* 支持加密链接
* 支持分享链接
* 支持二级分类
* 支持用户分组
* 支持Chrome/Firefox/Edge书签批量导入
* 支持多种主题风格
* 支持链接信息自动识别
* 支持API
* 支持Docker部署
* 支持uTools插件
* 支持Chromium内核的[浏览器扩展]
