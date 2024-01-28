# api-web-comic

layanan yang mungkin akan direquest oleh client

# konsep awal

```
Entitas User:
    Atribut:
        UserID (Primary Key)
        Username
        Email
        Password
        Role (Contoh: 'User', 'Author', 'Admin')
        CreatedAt
        UpdatedAt

Entitas Author:
    Atribut:
        AuthorID (Primary Key)
        UserID (Foreign Key ke User)
        PenName
        Biography
        CreatedAt
        UpdatedAt

Entitas Manga:
    Atribut:
        MangaID (Primary Key)
        AuthorID (Foreign Key ke Author)
        Title
        Description
        Genre
        CoverImage
        CreatedAt
        UpdatedAt

Entitas Chapter:
    Atribut:
        ChapterID (Primary Key)
        MangaID (Foreign Key ke Manga)
        Title
        ChapterNumber
        Content (misalnya, URL ke file gambar atau teks)
        CreatedAt
        UpdatedAt

Entitas Comment:
    Atribut:
        CommentID (Primary Key)
        UserID (Foreign Key ke User)
        MangaID (Foreign Key ke Manga)
        ChapterID (Foreign Key ke Chapter)
        Content
        CreatedAt
        UpdatedAt

Entitas Rating:
    Atribut:
        RatingID (Primary Key)
        UserID (Foreign Key ke User)
        MangaID (Foreign Key ke Manga)
        Rating (Misalnya, 1 hingga 5)
        CreatedAt

Entitas Web View Report:
    Atribut:
        ReportID (Primary Key)
        MangaID (Foreign Key ke Manga)
        ChapterID (Foreign Key ke Chapter)
        UserID (Foreign Key ke User)
        ReportType (Misalnya, 'Inappropriate Content', 'Spam', dll.)
        Description
        CreatedAt

Entitas Follow:
    Atribut:
        FollowID (Primary Key)
        FollowerUserID (Foreign Key ke User)
        FollowingAuthorID (Foreign Key ke Author)
        CreatedAt
```

Hubungan (Hubungan antara entitas dijelaskan sebagai berikut)

-   User memiliki banyak Comment dan Rating. (One-to-Many)
-   Author memiliki banyak Manga. (One-to-Many)
-   Manga memiliki banyak Chapter, Rating, dan Web View Report. (One-to-Many)
-   Chapter memiliki banyak Comment dan termasuk dalam banyak Web View Report. (One-to-Many)
-   Comment hanya memiliki satu User. (Many-to-One)
-   Comment hanya memiliki satu Manga. (Many-to-One)
-   Comment hanya memiliki satu Chapter. (Many-to-One)
-   Rating hanya memiliki satu User dan satu Manga. (Many-to-One)
-   Web View Report hanya memiliki satu User, satu Manga, dan satu Chapter. (Many-to-One)
-   Follow adalah Many-to-Many antara User dan Author yang melibatkan tabel pivot.
