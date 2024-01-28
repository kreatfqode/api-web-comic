# api-web-comic

These improvements and additions are based on general best practices and can be further customized based on specific system requirements.

## Conceptual Data

```
Entity User:

    Attributes:
        - UserID (Primary Key)
        - Username
        - Email
        - Password (Encrypted for security)
        - Full Name
        - Profile Picture
        - Role (Example: 'User', 'Author', 'Admin')
        - CreatedAt
        - UpdatedAt

Entity Author:

    Attributes:
        - AuthorID (Primary Key)
        - UserID (Foreign Key to User)
        - PenName
        - Biography
        - Social Media/Contact Information
        - CreatedAt
        - UpdatedAt

Entity Manga:

    Attributes:
        - MangaID (Primary Key)
        - AuthorID (Foreign Key to Author)
        - Title
        - Description
        - Genre (Array to support multiple genres)
        - CoverImage
        - Views Count
        - CreatedAt
        - UpdatedAt

Entity Chapter:

    Attributes:
        - ChapterID (Primary Key)
        - MangaID (Foreign Key to Manga)
        - Title
        - ChapterNumber
        - Content (e.g., URL to image file or text)
        - CreatedAt
        - UpdatedAt

Entity Comment:

    Attributes:
        - CommentID (Primary Key)
        - UserID (Foreign Key to User)
        - MangaID (Foreign Key to Manga)
        - ChapterID (Foreign Key to Chapter)
        - Content
        - ParentCommentID (Foreign Key to Comment for reply structure)
        - Likes Count
        - CreatedAt
        - UpdatedAt

Entity Rating:

    Attributes:
        - RatingID (Primary Key)
        - UserID (Foreign Key to User)
        - MangaID (Foreign Key to Manga)
        - Rating (e.g., 1 to 5)
        - Review (to support additional comments)
        - CreatedAt

Entity Web View Report:

    Attributes:
        - ReportID (Primary Key)
        - MangaID (Foreign Key to Manga)
        - ChapterID (Foreign Key to Chapter)
        - UserID (Foreign Key to User)
        - ReportType (e.g., 'Inappropriate Content', 'Spam', etc.)
        - Description
        - Status (e.g., 'Processed', 'Rejected')
        - CreatedAt

Entity Follow:

    Attributes:
        - FollowID (Primary Key)
        - FollowerUserID (Foreign Key to User)
        - FollowingAuthorID (Foreign Key to Author)
        - CreatedAt
        - LastFollowedAt
```

## Relationships

-   User has many Comments and Ratings (Many-to-Many)
-   Author has many Mangas (One-to-Many)
-   Manga has many Chapters, Ratings, and Web View Reports (One-to-Many)
-   Chapter has many Comments and is included in many Web View Reports (One-to-Many)
-   Comment belongs to one User (Many-to-One)
-   Comment belongs to one Manga (Many-to-One)
-   Comment belongs to one Chapter (Many-to-One)
-   Rating belongs to one User and one Manga (Many-to-One)
-   Web View Report belongs to one User, one Manga, and one Chapter (Many-to-One)
-   Follow is a Many-to-Many relationship between User and Author involving a pivot table.

## Additional Considerations

-   Security measures, including encrypted password storage and protection against SQL injection.
-   Timestamps for each entity (CreatedAt, UpdatedAt, and DeletedAt for soft deletes).
-   Pivot table for the Follow relationship can include a LastFollowedAt timestamp.

Note: [User Use Case Analisys](/documentation/user_use_case_analysis.md)
