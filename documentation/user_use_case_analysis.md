## User Use Case Analysis

Certainly! Below are scenarios elaborating the possible use cases for the mentioned user interactions

### Explanation use case

```
User Login:
    User logs into the system.

User Chooses Manga:
    User selects a manga to explore.
    Alternative Case:
        User likes the selected manga.

User Opens Manga:
    User opens a specific manga.
    Alternative Cases:
        User follows the author of the manga.
        User likes the manga.
        Views count for the manga increases.
        User rates the manga.

User Reads a Chapter:
    User reads a specific chapter.
    Alternative Case:
        User comments on the chapter.
            Alternative Case:
                User likes the comment.
        User reports the chapter.

User Opens Author's Biography:
    User opens the biography of the author.
    Alternative Case:
        User follows the author.
```

### Improvements and Clarifications

Likes:

-   It's not explicitly mentioned where the likes are being stored. Consider adding a "Like" entity to track likes on manga, chapters, and comments.

Views Count:

-   Ensure that the views count is updated accurately. This may involve handling unique views to prevent duplications.

Rating:

-   Specify that the rating is given to a specific manga and not just a chapter. Consider storing ratings as a separate entity.

Biography:

-   Ensure that the biography of the author provides relevant information about the author.

Reporting:

-   Specify the type of report allowed (e.g., inappropriate content, spam) and include a process for handling reported content.

Comments and Likes:

-   Clarify that comments and likes are associated with specific chapters and not just the manga in general.

User Interaction:

-   Consider adding user interaction feedback, such as notifications or updates, to enhance the user experience.

User Interface Considerations:

-   Consider the design and layout of the user interface to make the interactions intuitive and user-friendly.

Data Security:

-   Ensure that user interactions, especially likes, comments, and reports, are secured to prevent misuse.

Exception Handling:

-   Address error and exception handling scenarios, such as what happens if a user tries to perform an action without being logged in.
