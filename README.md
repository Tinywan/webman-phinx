# webman-phinx

webman-phinx

## 检查是否创建成功

```phpregexp
# 数据库设链接是否正确
vendor/bin/phinx test

# 默认的环境是开发环境，这个测试数据库的链接是否正确

vendor/bin/phinx test -e development
```

https://www.liuhaolin.com/moren/1053.html

## 三注意事项

- 1 change 方法中创建或者更新表的时候你必须使用 create() 或者 update() 方法；
up方法中使用 save()
  
- 2 不能在 change() 方法中使用插入数据，只能在 up() 和 down() 中使用