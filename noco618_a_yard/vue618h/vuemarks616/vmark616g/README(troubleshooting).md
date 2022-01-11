# Trouble..


# 1

### 404 on direct visit to route

```
vue.js - Vue Router return 404 when revisit to the url - Stack Overflow
problem:
But, when I try to refresh that page or go directly from browser address bar, it just return 404.
ans.
Then if you are on Nginx:
location / {
try_files $uri $uri/ /index.html;
}
And that's all For more information, visit this Link

 vuejs
     January 3, 2022 at 7:02:37 PM EST * · permalink  · QRCode · archive.org
 https://stackoverflow.com/questions/36399319/vue-router-return-404-when-revisit-to-the-url 
```

