## Domain Stucture

```
app
└── Domains
    ├── User
    │   ├── Actions
    │   │   ├── UserRegistrationAction.php
    │   │   ├── UserAuthenticationAction.php
    │   │   └── UserAuthorizationAction.php
    │   ├── Data
    │   │   └── UserRepository.php
    │   ├── Events
    │   │   └── UserRegistered.php
    │   ├── Exceptions
    │   │   ├── UserNotFoundException.php
    │   │   └── UserUnauthorizedException.php
    │   ├── Http
    │   │   └── Resources
    │   │       └── UserResource.php
    │   ├── Jobs
    │   │   └── SendUserRegistrationEmailJob.php
    │   ├── Listeners
    │   │   └── UserRegisteredListener.php
    │   ├── Policies
    │   │   └── UserPolicy.php
    │   └── Services
    │       ├── AuthenticationService.php
    │       ├── AuthorizationService.php
    │       └── UserService.php
    ├── Manga
    │   ├── Actions
    │   │   ├── MangaDiscoveryAction.php
    │   │   ├── CommentLeavingAction.php
    │   │   └── RatingGivingAction.php
    │   ├── Data
    │   │   ├── MangaRepository.php
    │   │   ├── CommentRepository.php
    │   │   ├── RatingRepository.php
    │   │   └── AuthorRepository.php
    │   ├── Events
    │   │   ├── CommentLeft.php
    │   │   └── RatingGiven.php
    │   ├── Exceptions
    │   │   ├── MangaNotFoundException.php
    │   │   ├── CommentNotFoundException.php
    │   │   └── RatingNotFoundException.php
    │   ├── Http
    │   │   └── Resources
    │   │       ├── MangaResource.php
    │   │       ├── CommentResource.php
    │   │       └── RatingResource.php
    │   ├── Jobs
    │   │   ├── NotifyAuthorOnNewCommentJob.php
    │   │   └── NotifyUserOnNewRatingJob.php
    │   ├── Listeners
    │   │   ├── CommentLeftListener.php
    │   │   └── RatingGivenListener.php
    │   ├── Policies
    │   │   ├── MangaPolicy.php
    │   │   ├── CommentPolicy.php
    │   │   └── RatingPolicy.php
    │   └── Services
    │       └── RecommendationService.php
    ├── Admin
    │   ├── Actions
    │   │   ├── AdminAuthenticationAction.php
    │   │   ├── AdminAuthorizationAction.php
    │   │   ├── AdminManagingUsersAction.php
    │   │   ├── AdminManagingAuthorsAction.php
    │   │   ├── AdminManagingMangaAction.php
    │   │   ├── AdminManagingReportsAction.php
    │   │   └── AdminManagingWarningsAction.php
    │   ├── Data
    │   │   ├── AdminRepository.php
    │   │   ├── ReportRepository.php
    │   │   └── WarningMessageRepository.php
    │   ├── Events
    │   │   ├── AdminReportReceived.php
    │   │   └── AdminWarningIssued.php
    │   ├── Exceptions
    │   │   ├── AdminNotFoundException.php
    │   │   └── AdminUnauthorizedException.php
    │   ├── Http
    │   │   └── Resources
    │   │       ├── AdminResource.php
    │   │       ├── ReportResource.php
    │   │       └── WarningMessageResource.php
    │   ├── Jobs
    │   │   ├── NotifyAdminOnReportJob.php
    │   │   └── NotifyAdminOnWarningJob.php
    │   ├── Listeners
    │   │   ├── AdminReportReceivedListener.php
    │   │   └── AdminWarningIssuedListener.php
    │   ├── Policies
    │   │   ├── AdminPolicy.php
    │   │   ├── ReportPolicy.php
    │   │   └── WarningMessagePolicy.php
    │   └── Services
    │       ├── AdminAuthenticationService.php
    │       ├── AdminAuthorizationService.php
    │       └── AdminService.php
    └── Author
        ├── Actions
        │   ├── AuthorRegistrationAction.php
        │   ├── AuthorProfileManagementAction.php
        │   ├── MangaCreationAction.php
        │   └── ChapterManagementAction.php
        ├── Data
        │   ├── AuthorRepository.php
        │   └── MangaRepository.php
        ├── Events
        │   ├── AuthorRegistered.php
        │   └── NewChapterPublished.php
        ├── Exceptions
        │   ├── AuthorNotFoundException.php
        │   └── MangaNotFoundException.php
        ├── Http
        │   └── Resources
        │       ├── AuthorResource.php
        │       └── MangaResource.php
        ├── Jobs
        │   ├── NotifyAdminOnNewAuthorJob.php
        │   └── NotifyFollowersOnNewChapterJob.php
        ├── Listeners
        │   ├── AuthorRegisteredListener.php
        │   └── NewChapterPublishedListener.php
        ├── Policies
        │   ├── AuthorPolicy.php
        │   └── MangaPolicy.php
        └── Services
            ├── AuthorRegistrationService.php
            ├── AuthorProfileManagementService.php
            ├── MangaCreationService.php
            └── ChapterManagementService.php
```
