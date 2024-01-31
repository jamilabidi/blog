```mermaid
graph TD
A[Start] --> B[get all posts from database]
B --> C{no blog post ?}
C -- Yes --> D[display empty disclaimer]
C -- No --> E[display blog post]
E --> F{more blogpost?}
F -- Yes --> E
F -- No --> G[End]
```
affichage sélection blog de la page d'accueil 
```mermaid
sequenceDiagram
User->>index.php: ?action=
index.php->>homeController.php: include
homeController.php->>blogPostData.php: lastBlogPosts()
blogPostData.php->>PDO: prepare()
PDO-->>blogPostData.php: PDOStatement
blogPostData.php->>PDOStatement: execute()
PDOStatement-->>blogPostData.php: isSuccess
blogPostData.php->>PDOStatement: fetchAll()
PDOStatement-->>blogPostData.php: blogPosts
blogPostData.php-->>homeController.php: blogPosts
homeController.php->>home.tpl.php: blogPosts
home.tpl.php-->>User: display blogPosts
```
affichage d'un article
```mermaid
sequenceDiagram
User->>index.php: ?action=article&id=<?= $value['id']
index.php->>blogPostController.php: include
blogPostController.php->>blogPostData.php: blogPostById()
blogPostController.php->>blogPostData.php: commentsByBlogPost()
blogPostData.php->>PDO: prepare()
PDO-->>blogPostData.php: PDOStatement
blogPostData.php->>PDOStatement: execute()
PDOStatement-->>blogPostData.php: isSuccess
blogPostData.php->>PDOStatement: fetchAll()
PDOStatement-->>blogPostData.php: article
blogPostData.php-->>blogPostController.php: article selected
blogPostController.php->>article.tpl.php: article selected
article.tpl.php-->>User: display blogPosts
```

soumission d'un article
```mermaid
sequenceDiagram
User->>index.php: ?action=create
index.php->>blogPostCreateController.php: include
blogPostCreateController.php->>blogPostData.php: blogPostCreate()
blogPostData.php->>PDO: prepare()
PDO-->>blogPostData.php: PDOStatement
blogPostData.php->>PDOStatement: execute()
PDOStatement-->>blogPostData.php: isSuccess
blogPostData.php->>PDOStatement: execute()
PDOStatement-->>blogPostData.php: article
blogPostData.php-->>blogPostCreateController.php: article submitted
blogPostCreateController.php->>blogPostCreate.tpl.php: article submitted
blogPostCreate.tpl.php-->>User: display blogPosts
```

edition d'un article
```mermaid
sequenceDiagram
User->>index.php: ?action=blogPostModify&id=2
index.php->>blogPostModifyController.php: include
blogPostModifyController.php->>blogPostData.php: blogPostUpdate()
blogPostData.php->>PDO: prepare()
PDO-->>blogPostData.php: PDOStatement
blogPostData.php->>PDOStatement: execute()
PDOStatement-->>blogPostData.php: isSuccess
blogPostData.php->>PDOStatement: execute()
PDOStatement-->>blogPostData.php: article
blogPostData.php-->>blogPostModifyController.php: article updated
blogPostModifyController.php->>blogPostUpdate.tpl.php: article updated
blogPostUpdate.tpl.php-->>User: display blogPostsUpdate
```
