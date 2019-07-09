[![License](https://img.shields.io/github/license/yonna-framework/throwable.svg)](https://packagist.org/packages/yonna/throwable)
[![Repo Size](https://img.shields.io/github/repo-size/yonna-framework/throwable.svg)](https://packagist.org/packages/yonna/throwable)
[![Downloads](https://img.shields.io/packagist/dm/yonna/throwable.svg)](https://packagist.org/packages/yonna/throwable)
[![Version](https://img.shields.io/github/release/yonna-framework/throwable.svg)](https://packagist.org/packages/yonna/throwable)
[![Php](https://img.shields.io/packagist/php-v/yonna/throwable.svg)](https://packagist.org/packages/yonna/throwable)

## Yonna throwable库

```
throwable更好地管理抛出
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
    
    class YourClass
    {
        const YOUR_THROW = true;
    
        public function checkMyLogic(){
            if(self::YOUR_THROW){
                Exception::throw('oh my god');
                Exception::abort('oh my god');
                Exception::database('oh my db');
            }
        }
        
    }
    
?>
```