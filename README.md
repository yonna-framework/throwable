[![License](https://img.shields.io/github/license/yonna-framework/throwable.svg)](https://packagist.org/packages/yonna/throwable)
[![Repo Size](https://img.shields.io/github/repo-size/yonna-framework/throwable.svg)](https://packagist.org/packages/yonna/throwable)
[![Downloads](https://img.shields.io/packagist/dm/yonna/throwable.svg)](https://packagist.org/packages/yonna/throwable)
[![Version](https://img.shields.io/github/release/yonna-framework/throwable.svg)](https://packagist.org/packages/yonna/throwable)
[![Php](https://img.shields.io/packagist/php-v/yonna/throwable.svg)](https://packagist.org/packages/yonna/throwable)

## Yonna throwable库

```
throwable更好地管理抛出/错误
你可以简单地运送默认的组件操作你的错误
```

## 

#### 如何安装

##### 可以通过composer安装：`composer require yonna/throwable`

##### 可以通过git下载：`git clone https://github.com/yonna-framework/throwable.git`

> Yonna demo：[GOTO yonna](https://github.com/yonna-framework/yonna)

### Example

> 使用 Throwable 管理你的 Exception
```php
<?php
    

    use Yonna\Throwable\Exception;
    
    // 按原来捕捉抛出
    try{
        // ...
    } catch (\Throwable $e){
        Exception::origin($e);
    }
    
    Exception::throw('default exception');
    Exception::params('oh my params');
    Exception::database('oh my database');
    Exception::sdk('oh my sdk');
    Exception::debug('oh my debug');
    // more
    
?>
```

> 使用 Throwable 管理你的 Error
```php
<?php
    

    use Yonna\Throwable\Error;
    
    Error::throw('default');
    Error::notice('notice');
    Error::warning('warning');
    Error::deprecated('deprecated');
    
?>
```