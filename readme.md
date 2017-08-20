<h1>Restful API For Simple</h1>

<h3>GET PRODUCTS</h3>

`GET` [api/v1/products](http://m1991a.com/api/v1/products/)

<h4>Response : </h4>

```
{
    "products": [
        {
            "id": 4,
            "name": "Cars",
            "created_at": "2017-08-19 07:49:08",
            "updated_at": "2017-08-19 07:49:08",
            "products": [
                {
                    "id": 8,
                    "name": "Volvo",
                    "quantity": 7,
                    "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,",
                    "image": "BE5vC1oB3F9CDopYbZbT.png",
                    "price": 24000,
                    "category_id": 4,
                    "created_at": "2017-08-19 09:12:22",
                    "updated_at": "2017-08-19 09:19:12"
                },
                {
                    "id": 7,
                    "name": "Toyota",
                    "quantity": 5,
                    "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,",
                    "image": "6JnzmbyfGHhwawR8XaEm.png",
                    "price": 10000,
                    "category_id": 4,
                    "created_at": "2017-08-19 09:12:00",
                    "updated_at": "2017-08-19 09:19:25"
                },

            ]
        }
      
 
    ]
}
```

<h3>GET PRODUCT</h3>

`GET` [api/v1/products/get/:id](http://m1991a.com/api/v1/products/get/2)

<h4>Response : </h4>

```
{
    "product": {
        "id": 2,
        "name": "iPhone 4",
        "quantity": 11,
        "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,",
        "image": "TmbnlCSmEDqxzgG45UYx.png",
        "price": 150,
        "category_id": 1,
        "created_at": "2017-08-19 07:39:24",
        "updated_at": "2017-08-19 08:46:02"
    }
}
```

<h3>SEARCH BY NAME</h3>

`POST` [api/v1/products/search/name](http://m1991a.com/api/v1/products/search/name/)

<h4>Response : </h4>

```
{
    "products": [
        {
            "id": 2,
            "name": "iPhone 4",
            "quantity": 11,
            "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,",
            "image": "TmbnlCSmEDqxzgG45UYx.png",
            "price": 150,
            "category_id": 1,
            "created_at": "2017-08-19 07:39:24",
            "updated_at": "2017-08-19 08:46:02"
        }
    ],
    "search": "iphone 4"
}
```

<h3>SEARCH BY PRICE</h3>

`POST` [api/v1/products/search/price](http://m1991a.com/api/v1/products/search/price/)

<h4>Response : </h4>

```
{
    "products": [
        {
            "id": 2,
            "name": "iPhone 4",
            "quantity": 11,
            "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,",
            "image": "TmbnlCSmEDqxzgG45UYx.png",
            "price": 150,
            "category_id": 1,
            "created_at": "2017-08-19 07:39:24",
            "updated_at": "2017-08-19 08:46:02"
        },
        {
            "id": 12,
            "name": "Asus",
            "quantity": 20,
            "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,",
            "image": "x5dvWywgh21tESY6gLq8.png",
            "price": 150,
            "category_id": 3,
            "created_at": "2017-08-19 09:17:03",
            "updated_at": "2017-08-19 09:17:03"
        }
    ],
    "search": "100",
    "searchMax": "150"
}
```

<h3>USER LOGIN</h3>

`POST` [api/v1/user/login](http://m1991a.com/api/v1/user/login)

<h4>Response : </h4>

```
{
    "user": {
        "id": 1,
        "name": "Sagad Salem",
        "email": "sagadsalem@yahoo.com",
        "avatar": "7gzRK3Ny8vfFWFoPWT0F.png",
        "created_at": "2017-08-19 07:29:59",
        "updated_at": "2017-08-19 07:29:59",
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hcGkvdjEvdXNlci9sb2dpbiIsImlhdCI6MTUwMzE0NDM3NSwiZXhwIjoxNTM0MjQ4Mzc1LCJuYmYiOjE1MDMxNDQzNzUsImp0aSI6InNWQmhHMDdqczhIeUhwcmwifQ.NCefuNNT5TsaGPM7ScUkatPjFi2PbogHPE6GCeqmsj0"
    }
}
```

<h3>USER REGISTER</h3>

`POST` [api/v1/user/register](http://m1991a.com/api/v1/user/register)

<h4>Response : </h4>

```
{
    "user": {
        "id": 1,
        "name": "Sagad Salem",
        "email": "sagadsalem@yahoo.com",
        "avatar": "7gzRK3Ny8vfFWFoPWT0F.png",
        "created_at": "2017-08-19 07:29:59",
        "updated_at": "2017-08-19 07:29:59",
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hcGkvdjEvdXNlci9sb2dpbiIsImlhdCI6MTUwMzE0NDM3NSwiZXhwIjoxNTM0MjQ4Mzc1LCJuYmYiOjE1MDMxNDQzNzUsImp0aSI6InNWQmhHMDdqczhIeUhwcmwifQ.NCefuNNT5TsaGPM7ScUkatPjFi2PbogHPE6GCeqmsj0"
    }
}
```

<h3>PLACE ORDER</h3>

`POST` [api/v1/cart/send](http://m1991a.com/api/v1/send)

<h4>Response : </h4>

```
{
    "success": [
        "Your Order Send Successfully!!"
    ]
}
```

