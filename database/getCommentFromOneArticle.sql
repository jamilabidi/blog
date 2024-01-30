select
    comments.body,comments.date ,Authors.pseudo
from
    comments
        INNER JOIN Authors ON Authors.id=comments.Authors_id
where
    Articles_id =$idArticleRequested;