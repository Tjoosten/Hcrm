# API Authentication.

We provide a api for our crm system. That allows you to use the crm data 
in external platform(s)

### Creating tokens.

You can simply create a token following thse steps. 

1) Login in the crm. 
2) Click on your username. 
3) Select account configuration & tab API . 
4) Fill in the form. 
5) You are done!

## Request authentication `(Curl)`

```bash
curl --header "X-Authorization: 2ed9d72e5596800bf805ca1c735e446df72019ef" http://localhost:8000/api/v1/books
```

And you should normally get something like this: 

```
{
    "data": {
        "id": 1,
        "title": "The Great Adventures of Chris",
        "created_at": {
            "date": "2014-03-25 18:54:18",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2014-03-25 18:54:18",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "deleted_at": null
    }
}
```