SELECT
    title,
    pseudo

FROM
    Articles
        JOIN
    Authors
    ON
        Articles.Authors_id=Authors.id
    LIMIT
10;