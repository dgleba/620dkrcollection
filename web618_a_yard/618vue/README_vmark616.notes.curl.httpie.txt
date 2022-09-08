

pasw=ma
echo "${pasw}"


use this..
	https://httpie.io/docs/cli/optional-get-and-post
less trouble than curl.


=================================================



#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
#@  
#@  login
#@  
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@   2021-12-31[Dec-Fri]12-05PM 


works.


===

url=https://devdj.198.23.238.244.nip.io/api/token/
http post $url  username=dgleba password=$pasw


curl with tricks

printf -v ddata '{"username":"dgleba","password":"%s"}' $pasw
echo curl  -i -H "'"Content-Type: application/json"'"  -X POST  -d "'"$ddata"'"  \
https://devdj.198.23.238.244.nip.io/api/token/ >curltmp
bash curltmp ;  rm curltmp ;




---
eg:
printf -v data '{"query":"%s", "turnOff":true}' "developer"
echo curl -d "$data" -H "Content-Type: application/json" -X POST http://localhost:8080/explorer
# https://askubuntu.com/questions/1070864/how-to-set-variable-in-the-curl-command-in-bash
---

eg:
curl  -i -H "Content-Type: application/json"  \
      -X POST -D ./curldump -i\
      -d '{"username":"cc","password":"aa"}' \
      http://192.168.88.60:6461/api/token/ 
			



{"refresh":"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ0b2tlbl90eXBlIjoicmVmcmVzaCIsImV4cCI6MTY0MTE0OTI1OCwiaWF0IjoxNjQwOTc2NDU4LCJqdGkiOiI0YTY5ZjViZWNkNDE0ZGRkOGZjYmNhMWQ1NmRjYmY0MiIsInVzZXJfaWQiOjF9.S9Zp0sZDI3s1zAESsA3LoQi8eRqLl_ZALKfrHcdLfSY",
"access":
"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ0b2tlbl90eXBlIjoiYWNjZXNzIiwiZXhwIjoxNjQxMDY2NDU4LCJpYXQiOjE2NDA5NzY0NTgsImp0aSI6ImM0MzU3ZjVmYzdiYjQwZTI5MjEyMDQ5YjYwZDU3ODdlIiwidXNlcl9pZCI6MX0.EonQO1glwRtwqcknt2FQsIMhY5G5MJyJ3t-TkFUHXLM"
}albe@host211220-1121:/ap/dkrcollection617/bmark616a-yard/vmark616f$

{
    "access": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ0b2tlbl90eXBlIjoiYWNjZXNzIiwiZXhwIjoxNjQxMDY3MzY4LCJpYXQiOjE2NDA5NzczNjgsImp0aSI6IjNiYWU0ZDkxNDIxYjQzNjBhM2FlOGFjMDM4NWY5MzljIiwidXNlcl9pZCI6MX0.V_UzVZSRnmK18ygHAERTR3IbM5LjP1NwyfYglTJQi1I",
    "refresh": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ0b2tlbl90eXBlIjoicmVmcmVzaCIsImV4cCI6MTY0MTE1MDE2OCwiaWF0IjoxNjQwOTc3MzY4LCJqdGkiOiIwYWIyNzQxOTk5MjE0NTRjYWQyNGZmMTNlYmY3ZjAzNCIsInVzZXJfaWQiOjF9.6sIV_fQiFlS__i-RU19LKlOK3ge5856ZWG33IX1CyAY"
}



tokn="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ0b2tlbl90eXBlIjoiYWNjZXNzIiwiZXhwIjoxNjQxMDY5MTAxLCJpYXQiOjE2NDA5NzkxMDEsImp0aSI6IjcwZDc0ODhjNTEzMjQyYjZiYTg0YzM3NzJiMzQxMDkxIiwidXNlcl9pZCI6MX0.TpSrMikK_ARS_Xakw8x6h7CcPchSa98DgK-QdolFYI0"

tokn=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ0b2tlbl90eXBlIjoiYWNjZXNzIiwiZXhwIjoxNjQxMTUxNTMyLCJpYXQiOjE2NDEwNjE1MzIsImp0aSI6IjVmOTI5MTJjODc2YzQ2MmRhMDdhY2RhODM1ODZjZDgzIiwidXNlcl9pZCI6MX0.TfflNx82F0VFESRMxBCTB7AaX_5Lyuc1wQCAg9yisUA

=================================================


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
#@  
#@  create
#@  
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@   2021-12-31[Dec-Fri]13-34PM 

works.


echo $tokn
url=https://devdj.198.23.238.244.nip.io/mark616/api/v1/bookmk/
http $url "authorization: Bearer $tokn" title=world4



curl -i -H "Content-Type: application/json" -H "Authorization: Bearer $tokn" -X post  -d '{"title":"cc","commentz":"aa"}' 'https://devdj.198.23.238.244.nip.io/mark616/api/v1/bookmk/'
	error:
	curl: (1) Protocol "'https" not supported or disabled in libcurl


_____________

notes..

url="'https://devdj.198.23.238.244.nip.io/mark616/api/v1/bookmk/'"
curl -i --request POST --url $url   --header "authorization: Bearer $tokn"  \
   --header 'content-type: application/json' \
  --data '{"title":"David6 Linen Keyboard"}'
  

	
eg:


http pie.dev/post hello=world


curl -i -H "Content-Type: application/json" -H "Authorization: Bearer $token" -X post  -d '{"title":"cc","body":"aa"}' 'https://devdj.198.23.238.244.nip.io/mark616/api/v1/bookmk/'


curl -i -H "Content-Type: application/json" -H "Authorization: Bearer $tokn" -X post  -d '{"title":"cc","body":"aa"}' 'http://192.168.88.60:6461/blogapp/api/v1/Post/'


eg:
curl -i   --request POST \
  --url http://pmdsdata4:3003/products.json \
  --header 'authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoyLCJleHAiOjE0ODM1MzkzNTB9.R7vx3cHGDOhoOks0a1G9j5axbuLbBaUj99XJR2EQzlo' \
  --header 'content-type: application/json' \
  --data '{"name":"David6 Linen Keyboard"}'
  



#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
#@  
#@  list
#@  
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@   2021-12-31[Dec-Fri]13-34PM 

url=https://devdj.198.23.238.244.nip.io/mark616/api/v1/bookmk/
# http http://192.168.88.60:6461/blogapp/api/v1/Post/ "Authorization: Bearer $tokn"
http $url "Authorization: Bearer $tokn"
echo $tokn

url=https://devdj.198.23.238.244.nip.io/mark616/api/v1/bookmk
curl -i --request GET --url $url   --header "authorization: Bearer $tokn"  \
   --header 'content-type: application/json' 



url=https://devdj.198.23.238.244.nip.io/blogapp/api/v1/Post?limit=2&ordering=-id
# http http://192.168.88.60:6461/blogapp/api/v1/Post/ "Authorization: Bearer $tokn"
http $url "Authorization: Bearer $tokn"
echo $tokn



#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
#@  
#@  junk
#@  
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@   2021-12-31[Dec-Fri]14-13PM 


junk

curl -i -H "Content-Type: application/json" -H "Authorization: Bearer $token" -X post  -d '{"title":"cc","description":"aa"}' 'https://devdj.198.23.238.244.nip.io/mark616/api/v1/bookmk/'



tokn='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoyLCJleHAiOjE0ODM2MTIyMjN9.2o1JrvdLdYU9TCl4_6FhUwOR2H3V8SNLTR-Hw1WjSb8'

curl -i   --request GET \
  --url https://devdj.198.23.238.244.nip.io/mark616/api/v1/bookmk \
  --header 'content-type: application/json' \
  --header 'authorization: Bearer $tokn' 
	

curl -i   --request GET \
  --url http://pmdsdata4:3003/products/4.json \
  --header 'content-type: application/json' \
  --header 'authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoyLCJleHAiOjE0ODM2MTIyMjN9.2o1JrvdLdYU9TCl4_6FhUwOR2H3V8SNLTR-Hw1WjSb8' 	

https://devdj.198.23.238.244.nip.io/mark616/mark616/bookmk/create/?url=https%3A%2F%2Fmark616vu.198.23.238.244.nip.io%2F&title=https%3A%2F%2Fmark616vu.198.23.238.244.nip.io%2F&description=&source=bookmarklet

https://devdj.198.23.238.244.nip.io/mark616/api/v1/


admin



=================================================
=================================================




