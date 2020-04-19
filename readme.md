# **Fire Ice Api and Crud Service**  
A system for Fire ice api and CRUD transaction for ooks.

## **Installation**
- run composer install to install dependency

## **Features**

- Application should query the Ice And Fire API and use the data received to
  respond with precisely the following JSON if there are results.  

- Application should query the Ice And Fire API and get a json result of a book  

- Created in the local database a record of book

- view in the local database a record of book

- Update in the local database a record of book  
- Delete in the local database a record of book


## **Endpoints**

> Base URL For Fire Ice : `https://www.anapioficeandfire.com/api`  
> Site base url : `http://localhost:8000/api`



### + GET `/external-books`  
This endpoint should query the Ice And Fire API and use the data received to
respond with precisely the following JSON if there are results.

A response of array of object with all books is returned
```
[
"status_code": 200,
"status": "success",
"data": [
        {
        "id": 1,
        "name": "A Game of Thrones",
        "isbn": "978-0553103540",
        "authors": [
        "George R. R. Martin"
        ],
        "number_of_pages": 694,
        "publisher": "Bantam Books",
        "country": "United States",
        "release_date": "1996-08-01",
        },
        {
        "id": 2,
        "name": "A Clash of Kings",
        "isbn": "978-0553108033",
        "author": [
        "George R. R. Martin"
        ],
        "number_of_pages": 768,
        "publisher": "Bantam Books",
        "country": "United States",
        "release_date": "1999-02-02",
        }
    ]
]
```



### + GET `/external-books/1`  
This endpoint should query the Ice And Fire API with the pass id and use the data received to
respond with precisely the following JSON if there are results.

A response of array of object with all books is returned
```
[
"status_code": 200,
"status": "success",
"data": [

        {
            "id": 1,
            "name": "A Game of Thrones",
            "isbn": "978-0553103540",
            "authors": [
                "George R. R. Martin"
            ],
            "number_of_pages": 694,
            "publisher": "Bantam Books",
            "country": "United States",
            "release_date": "1996-08-01",
        }
    ]
]
```



### + POST `/books`   
This handles the crate of new book record.  
The post request includes the:  
`name` - The book name.  
`isbn` - The book isbn.  
`authors` - The array of  book authors.  
`number_of_pages` - The  number of pages in the book.  
`publisher` - The book publisher.

`release_date` - The book release_date.
```
Request:  
{
	"name": "My First Book",
	"isbn": "123-3213243567",
	"authors": [
	    "John Doe Second"
	],
	"number_of_pages": 350,
	"publisher": "Acme Books",
	"country": "United States",
	"release_date": "2019-08-01"
}
```


```
Response:  
{
	"name": "My First Book",
	"isbn": "123-3213243567",
	"authors": [
	    "John Doe Second"
	],
	"number_of_pages": 350,
	"publisher": "Acme Books",
	"country": "United States",
	"release_date": "2019-08-01"
}  
```

### + GET `/books`

This returns all books 
  
```
Response:  
    {
        "status": "success",
        "status_code": 200,
        "data": [
            {
                "id": 2,
                "name": "My First Book",
                "isbn": "123-3213243567",
                "authors": [
                    "John Doe Second"
                ],
                "country": "United States",
                "number_of_pages": "350",
                "publisher": "Acme Books",
                "release_date": "2019-08-01",
                "created_at": "2020-04-18 23:52:53",
                "updated_at": "2020-04-19 00:33:32"
            },
            {
                "id": 5,
                "name": "My First Book",
                "isbn": "123-3213243567",
                "authors": [
                    "John Doe Second"
                ],
                "country": "United States",
                "number_of_pages": "350",
                "publisher": "Acme Books",
                "release_date": "2019-08-01",
                "created_at": "2020-04-19 00:43:52",
                "updated_at": "2020-04-19 00:43:52"
            },
            {
                "id": 6,
                "name": "My First Book",
                "isbn": "123-3213243567",
                "authors": [
                    "John Doe Second"
                ],
                "country": "United States",
                "number_of_pages": "350",
                "publisher": "Acme Books",
                "release_date": "2019-08-01",
                "created_at": "2020-04-19 00:44:33",
                "updated_at": "2020-04-19 00:44:33"
            },
            {
                "id": 7,
                "name": "My First Book",
                "isbn": "123-3213243567",
                "authors": [
                    "John Doe Second"
                ],
                "country": "United States",
                "number_of_pages": "350",
                "publisher": "Acme Books",
                "release_date": "2019-08-01",
                "created_at": "2020-04-19 00:44:45",
                "updated_at": "2020-04-19 00:44:45"
            }
        ]
    } 
```


### + GET `/books/1`

This returns Single books 
  
```
Response:  
    {
        "status": "success",
        "status_code": 200,
        "data": [
            {
                "id": 2,
                "name": "My First Book",
                "isbn": "123-3213243567",
                "authors": [
                    "John Doe Second"
                ],
                "country": "United States",
                "number_of_pages": "350",
                "publisher": "Acme Books",
                "release_date": "2019-08-01",
                "created_at": "2020-04-18 23:52:53",
                "updated_at": "2020-04-19 00:33:32"
            },
        ]
    } 
```


### + PATCH `/books`   
This handles the UPDATE of EXISTING book record.  
The PATCH request includes the:  
`name` - The book name.  
`isbn` - The book isbn.  
`authors` - The array of  book authors.  
`number_of_pages` - The  number of pages in the book.  
`publisher` - The book publisher.

`release_date` - The book release_date.
```
Request:  
{
	"name": "My CUSTOM Book",
	"isbn": "123-3213243567",
	"authors": [
	    "John Doe Second"
	],
	"number_of_pages": 350,
	"publisher": "Acme Books",
	"country": "United States",
	"release_date": "2019-08-01"
}
```


```
Response:  
{
	"name": "My CUSTOM Book",
	"isbn": "123-3213243567",
	"authors": [
	    "John Doe Second"
	],
	"number_of_pages": 350,
	"publisher": "Acme Books",
	"country": "United States",
	"release_date": "2019-08-01"
}  
```



### + DELETE `/books/1`

This returns Response for deleted  books 
  
```
Response:  
    [
    "status_code": 204,
    "status": "success",
    "message": "The book My CUSTOM Book was deleted successfully",
    "data": []
    ]
```
