# docker-nginx-php
Simple PHP7 Docker Compose Environment


## Running
Build and start everything.
```sh
docker-compose up -d --build
```

Point your browsers to localhost:

![Picture of browser](./docs/images/php.jpg "PHP running inside Docker")

Now start Visual Code Studio and launch the Debugger:

![Picture of Icon](./docs/images/vscode-debugger.jpg "VSCode Launch Debugger")

Click Listen for XDebug:

![Picture of button](./docs/images/listen-to-xdebug.jpg "Listen to XDebug")

Set a breakpoint:

![Picture of Text Editor](./docs/images/set-break-point.jpg "Set a break-point.")

Refresh browser. This will cause the PHP code to run which will send a message to VS Code studio on port 9000, causing execution to stop at the break-point.


![Picture of Text Editor](./docs/images/stopped-at-a-breakpoint.jpg "Execution is halting.")







## Command Line
Connect to container with bash.
```sh
docker-compose exec web bash
```


## Mysql Command Line
```sh
docker-compose exec db bash
mysql --user=test --password=test test
mysql> exit
root@8792ae92e4f8:/# exit
```