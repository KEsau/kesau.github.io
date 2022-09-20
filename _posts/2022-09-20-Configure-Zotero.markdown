---
layout: post
title:  "Configure Zotero"
date:   2022-09-20 20:14:00 +0800
categories: Tool
---

It's crucial for a student majored in science to cultivate a good habit in managing your knowledge. 

I have been using Endnote for 2 years, because it was strongly recommended by many senior students and my school had baught licensed software for us. However, it's not easy to master it for below reasons: 

- Poor synchronizing
- Complicated functions and confusing user interface
- Annoying plugin in Microsoft Office

Managing reference is labourious without a handy tool. So, I turned to Zotero. 

> [Zotero](https://www.zotero.org/) is a free, open-source research tool that helps you collect, organize, and analyze research and share it in a variety of ways.Zotero includes the best parts of older reference manager software — the ability to store author, title, and publication fields and to export that information as formatted references — and the best aspects of modern software and web applications, such as the ability to organize, tag, and search in advanced ways. Zotero interacts seamlessly with online resources: when it senses you are viewing a book, article, or other object on the web, it can automatically extract and save complete bibliographic references. Zotero effortlessly transmits information to and from other web services and applications, and it runs both as a web service and offline on your personal devices. [^1]

Setup Zotero step-by-step (Windows 10 21H2, Google Chrome):

1. Download executable [installer](https://www.zotero.org/), choose the right version for your system. On September 20th 2022, Zotero is available for Mac, Windows, Linux, and iOS.

2. Open the installer and follow the guide. It runs smoothly.

3. Click the Zotero shorcut icon on the Desktop to launch the software.

4. Register a new zotero account and sign in.

5. Add [Zotero Connector](https://chrome.google.com/webstore/detail/zotero-connector/ekhagklcjbdpajgpjgmbionohlpdbjgc?hl=zh-CN) extension in Chrome.

6. Add item to Zotero by dragging PDF in or click the extension icon when browse the Pubmed record, Google scholar page or the full text on the publisher's website.

Now, you can start to use Zotero. However, the free plan provide only 300 MB storage for your attachments (e. g. the full-text PDF files). Obviously, it's insufficient.

I decided to extend it throught external sync service (Google Drive). Synchonizing the entire Zotero directory is dangerous and trouble-prone, so you can use a symlink to sync only the `storage` directory without touching the main Zotero SQLite database. [^2]

Step-by-step[^3]: 

1. My Google Drive is on `G:\My Drive`, make a new Directory `G:\My Drive\Zotero` and move the `storage` directory into it, remove the orignal directory.

2. Open Command Prompt as administrator and input (replace `USERNAME` with your username):
```
mklink /j "C:\Users\USERNAME\Zotero\storage" "D:\My Drive\Zotero\storage" 
```

3. Press Enter key to run and you are all done.

<br/>

---

<br/>

[^1]: [About Zotero](https://www.zotero.org/abou)

[^2]: [Zotero Documentation](https://www.zotero.org/support/sync)

[^3]: [Zotero + Huawei Cloud: Three steps make perfect sync \| Zhihu (in Chinese)](https://zhuanlan.zhihu.com/p/563078159)