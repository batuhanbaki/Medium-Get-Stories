# Medium-Get-Stories


API link: https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/username

** Api only get a stories details for current user
** Api uses medium rss url

GET Request: https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/@batuhannbaki

Response:

{
    "status": "ok",
    "feed": {
        "url": "https://medium.com/feed/@batuhannbaki",
        "title": "Stories by Batuhan Baki on Medium",
        "link": "https://medium.com/@batuhannbaki?source=rss-2740e20a8602------2",
        "author": "",
        "description": "Stories by Batuhan Baki on Medium",
        "image": "https://cdn-images-1.medium.com/fit/c/150/150/2*2s9W7oDMtROLK_wH42GFJQ.jpeg"
    },
    "items": [{...stories details}]
