---
layout: post
title:  "Set Clash in Ubuntu"
date:   2022-09-19 22:47:00 +0800
categories: Tool
---

[Clash for windows](https://github.com/Fndroid/clash_for_windows_pkg/releases) (Linux version, with GUI) is easy to use.

Step-by-step:

1. download:
```shell
wget https://github.com/Fndroid/clash_for_windows_pkg/releases/download/0.20.3/Clash.for.Windows-0.20.3-x64-linux.tar.gz
```

2. unzip:
```shell
tar -xzvf Clash.for.Windows-0.20.3-x64-linux.tar.gz
mv Clash.for.Windows-0.20.3-x64-linux clash
```

3. run:
```shell
cd clash
./cfw
```

4. change system network settings: open `Settings`-`Network`-`Proxy`, set http/https proxies to `127.0.0.1`, port `7890`.

5. set subscribe link: open clash GUI-`Profiles`, input your subscribe link and click `Download`.

Done.
