## Domain Stucture

```
app
└── Domains
    ├── User
    │   ├── Actions
    │   │   ├── UserRegistrationAction
    │   │   ├── UserAuthenticationAction
    │   │   └── UserAuthorizationAction
    │   ├── Data
    │   │   └── UserRepository
    │   ├── Events
    │   │   └── UserRegistered
    │   ├── Exceptions
    │   │   ├── UserNotFoundException
    │   │   └── UserUnauthorizedException
    │   ├── Http
    │   │   └── Resources
    │   │       └── UserResource
    │   ├── Jobs
    │   │   └── SendUserRegistrationEmailJob
    │   ├── Listeners
    │   │   └── UserRegisteredListener
    │   ├── Policies
    │   │   └── UserPolicy
    │   └── Services
    │       ├── AuthenticationService
    │       ├── AuthorizationService
    │       └── UserService
    ├── Manga
    │   ├── Actions
    │   │   ├── MangaDiscoveryAction
    │   │   ├── CommentLeavingAction
    │   │   └── RatingGivingAction
    │   ├── Data
    │   │   ├── MangaRepository
    │   │   ├── CommentRepository
    │   │   ├── RatingRepository
    │   │   └── AuthorRepository
    │   ├── Events
    │   │   ├── CommentLeft
    │   │   └── RatingGiven
    │   ├── Exceptions
    │   │   ├── MangaNotFoundException
    │   │   ├── CommentNotFoundException
    │   │   └── RatingNotFoundException
    │   ├── Http
    │   │   └── Resources
    │   │       ├── MangaResource
    │   │       ├── CommentResource
    │   │       └── RatingResource
    │   ├── Jobs
    │   │   ├── NotifyAuthorOnNewCommentJob
    │   │   └── NotifyUserOnNewRatingJob
    │   ├── Listeners
    │   │   ├── CommentLeftListener
    │   │   └── RatingGivenListener
    │   ├── Policies
    │   │   ├── MangaPolicy
    │   │   ├── CommentPolicy
    │   │   └── RatingPolicy
    │   └── Services
    │       └── RecommendationService
    ├── Admin
    │   ├── Actions
    │   │   ├── AdminAuthenticationAction
    │   │   ├── AdminAuthorizationAction
    │   │   ├── AdminManagingUsersAction
    │   │   ├── AdminManagingAuthorsAction
    │   │   ├── AdminManagingMangaAction
    │   │   ├── AdminManagingReportsAction
    │   │   └── AdminManagingWarningsAction
    │   ├── Data
    │   │   ├── AdminRepository
    │   │   ├── ReportRepository
    │   │   └── WarningMessageRepository
    │   ├── Events
    │   │   ├── AdminReportReceived
    │   │   └── AdminWarningIssued
    │   ├── Exceptions
    │   │   ├── AdminNotFoundException
    │   │   └── AdminUnauthorizedException
    │   ├── Http
    │   │   └── Resources
    │   │       ├── AdminResource
    │   │       ├── ReportResource
    │   │       └── WarningMessageResource
    │   ├── Jobs
    │   │   ├── NotifyAdminOnReportJob
    │   │   └── NotifyAdminOnWarningJob
    │   ├── Listeners
    │   │   ├── AdminReportReceivedListener
    │   │   └── AdminWarningIssuedListener
    │   ├── Policies
    │   │   ├── AdminPolicy
    │   │   ├── ReportPolicy
    │   │   └── WarningMessagePolicy
    │   └── Services
    │       ├── AdminAuthenticationService
    │       ├── AdminAuthorizationService
    │       └── AdminService
    └── Author
        ├── Actions
        │   ├── AuthorRegistrationAction
        │   ├── AuthorProfileManagementAction
        │   ├── MangaCreationAction
        │   └── ChapterManagementAction
        ├── Data
        │   ├── AuthorRepository
        │   └── MangaRepository
        ├── Events
        │   ├── AuthorRegistered
        │   └── NewChapterPublished
        ├── Exceptions
        │   ├── AuthorNotFoundException
        │   └── MangaNotFoundException
        ├── Http
        │   └── Resources
        │       ├── AuthorResource
        │       └── MangaResource
        ├── Jobs
        │   ├── NotifyAdminOnNewAuthorJob
        │   └── NotifyFollowersOnNewChapterJob
        ├── Listeners
        │   ├── AuthorRegisteredListener
        │   └── NewChapterPublishedListener
        ├── Policies
        │   ├── AuthorPolicy
        │   └── MangaPolicy
        └── Services
            ├── AuthorRegistrationService
            ├── AuthorProfileManagementService
            ├── MangaCreationService
            └── ChapterManagementService
```
