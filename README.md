# Medium-Get-Stories


API link: https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/username <br>

** Api only get a stories details for current user <br>
** Api uses medium rss url <br>
<br>
GET Request: https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/@batuhannbaki <br>
<br>
Response:<br>
<br>
{<br>
    "status": "ok",<br>
    "feed": {<br>
        "url": "https://medium.com/feed/@batuhannbaki",<br>
        "title": "Stories by Batuhan Baki on Medium",<br>
        "link": "https://medium.com/@batuhannbaki?source=rss-2740e20a8602------2",<br>
        "author": "",<br>
        "description": "Stories by Batuhan Baki on Medium",<br>
        "image": "https://cdn-images-1.medium.com/fit/c/150/150/2*2s9W7oDMtROLK_wH42GFJQ.jpeg"<br>
    },<br>
    "items": [{...stories details}]<br>
}
