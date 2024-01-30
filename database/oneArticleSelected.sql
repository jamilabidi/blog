SELECT *
FROM Articles JOIN Authors ON Articles.Authors_id=Authors.id WHERE Articles.id=$idArticleRequested;
