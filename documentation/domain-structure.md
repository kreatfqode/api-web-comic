1. **User Domain:**

    - **Domain Name:** UserDomain
    - **Folder Structure:**
        ```
        app/
        ├── Domains/
        │   ├── UserDomain/
        │       ├── Entities/
        │       │   ├── User.php
        │       ├── Repositories/
        │       │   ├── UserRepository.php
        │       ├── Services/
        │           ├── RegistrationService.php
        │           ├── AuthenticationService.php
        │           ├── AuthorizationService.php
        ```

2. **Manga Domain:**

    - **Domain Name:** MangaDomain
    - **Folder Structure:**
        ```
        app/
        ├── Domains/
        │   ├── MangaDomain/
        │       ├── Entities/
        │       │   ├── Manga.php
        │       │   ├── Chapter.php
        │       ├── Repositories/
        │       │   ├── MangaRepository.php
        │       │   ├── ChapterRepository.php
        │       ├── Services/
        │           ├── DiscoveryService.php
        │           ├── LocalizationService.php
        │           ├── CommentService.php
        │           ├── RatingService.php
        │           ├── ReportService.php
        │           ├── FollowService.php
        │           ├── BookmarkService.php
        │           ├── NotificationService.php
        │           ├── TrendStatisticsService.php
        │           ├── InteractionTrackingService.php
        ```

3. **Author Domain:**

    - **Domain Name:** AuthorDomain
    - **Folder Structure:**
        ```
        app/
        ├── Domains/
        │   ├── AuthorDomain/
        │       ├── Entities/
        │       │   ├── Author.php
        │       ├── Repositories/
        │       │   ├── AuthorRepository.php
        │       ├── Services/
        │           ├── AuthorService.php
        │           ├── ProfileService.php
        │           ├── MangaCreationService.php
        │           ├── MangaManagementService.php
        ```

4. **Admin Domain:**
    - **Domain Name:** AdminDomain
    - **Folder Structure:**
        ```
        app/
        ├── Domains/
        │   ├── AdminDomain/
        │       ├── Entities/
        │       │   ├── Admin.php
        │       ├── Repositories/
        │       │   ├── AdminRepository.php
        │       │   ├── UserManagementRepository.php
        │       │   ├── AuthorManagementRepository.php
        │       │   ├── MangaManagementRepository.php
        │       │   ├── ReportManagementRepository.php
        │       │   ├── FollowManagementRepository.php
        │       │   ├── WarningRepository.php
        │       │   ├── MessageRepository.php
        │       ├── Services/
        │           ├── AdminUserService.php
        │           ├── AdminAuthorService.php
        │           ├── AdminMangaService.php
        │           ├── AdminReportService.php
        │           ├── AdminFollowService.php
        │           ├── AdminWarningService.php
        │           ├── AdminMessageService.php
        ```
