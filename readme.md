<h1>Restful API For Simple</h1>

<h3>GET PRODUCTS</h3>
`GET` [api/v1/products](http://m1991a.com/api/v1/products/)
####Response:
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
                {
                    "id": 6,
                    "name": "Mercedes",
                    "quantity": 3,
                    "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,",
                    "image": "16Han1z1mR44TaR13bQu.png",
                    "price": 30000,
                    "category_id": 4,
                    "created_at": "2017-08-19 09:11:42",
                    "updated_at": "2017-08-19 09:19:05"
                },
                {
                    "id": 5,
                    "name": "BMW",
                    "quantity": 5,
                    "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,",
                    "image": "hu8TPsj0OPGmnlKpA8TI.png",
                    "price": 20000,
                    "category_id": 4,
                    "created_at": "2017-08-19 09:11:16",
                    "updated_at": "2017-08-19 09:19:43"
                }
            ]
        },
        {
            "id": 3,
            "name": "Laptops",
            "created_at": "2017-08-19 07:49:15",
            "updated_at": "2017-08-19 07:49:15",
            "products": [
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
                },
                {
                    "id": 11,
                    "name": "hp",
                    "quantity": 30,
                    "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,",
                    "image": "gtJgCSEep7AgNzdqXAV6.png",
                    "price": 250,
                    "category_id": 3,
                    "created_at": "2017-08-19 09:16:47",
                    "updated_at": "2017-08-19 09:16:47"
                },
                {
                    "id": 10,
                    "name": "Dell",
                    "quantity": 20,
                    "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,",
                    "image": "4W61UwyMMSD1ufGHVqKM.png",
                    "price": 350,
                    "category_id": 3,
                    "created_at": "2017-08-19 09:16:21",
                    "updated_at": "2017-08-19 09:16:21"
                },
                {
                    "id": 9,
                    "name": "Mac",
                    "quantity": 11,
                    "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,",
                    "image": "1Ds5QPD4qY0hjkFJfaYN.png",
                    "price": 1500,
                    "category_id": 3,
                    "created_at": "2017-08-19 09:16:02",
                    "updated_at": "2017-08-19 09:16:02"
                }
            ]
        },
        {
            "id": 1,
            "name": "Phones",
            "created_at": "2017-08-19 07:38:03",
            "updated_at": "2017-08-19 07:38:03",
            "products": [
                {
                    "id": 4,
                    "name": "iPhone 7",
                    "quantity": 15,
                    "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,",
                    "image": "Ck4zNrb43CD4UP3eOKuM.png",
                    "price": 321,
                    "category_id": 1,
                    "created_at": "2017-08-19 07:40:15",
                    "updated_at": "2017-08-19 08:46:31"
                },
                {
                    "id": 3,
                    "name": "iPhone 5",
                    "quantity": 11,
                    "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,",
                    "image": "dQziENkUoozusLIbCX9X.png",
                    "price": 300,
                    "category_id": 1,
                    "created_at": "2017-08-19 07:39:47",
                    "updated_at": "2017-08-19 08:46:17"
                },
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
                    "id": 1,
                    "name": "iPhone 6",
                    "quantity": 11,
                    "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,",
                    "image": "onSlx7GDoegyMwKj3wEp.png",
                    "price": 200,
                    "category_id": 1,
                    "created_at": "2017-08-19 07:38:56",
                    "updated_at": "2017-08-19 08:45:54"
                }
            ]
        }
    ]
}
```
---	

<h3>GET PRODUCT</h3>
`GET` [api/v1/products/get/:id](http://m1991a.com/api/v1/products/get/2)
####Response:
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
---	
<h3>SEARCH BY NAME</h3>
`POST` [api/v1/products/search/name](http://m1991a.com/api/v1/products/search/name/)
####Response:
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
---	

<h3>SEARCH BY PRICE</h3>
`POST` [api/v1/products/search/price](http://m1991a.com/api/v1/products/search/price/)
####Response:
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
####Response:
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
####Response:
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
``````
{
    "success": [
        "Your Order Send Successfully!!"
    ]
}
``````
