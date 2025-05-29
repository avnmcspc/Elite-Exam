select * from album_sales;

SELECT artist, COUNT(album) AS total_albums
FROM album_sales
GROUP BY artist;

SELECT artist, SUM(sales) AS total_sales
FROM album_sales
GROUP BY artist;

SELECT artist, SUM(sales) AS total_sales
FROM album_sales
GROUP BY artist
ORDER BY total_sales DESC
LIMIT 1;

SELECT a.dateRelease, a.artist, a.album, a.sales
FROM album_sales a
WHERE LEFT(a.dateRelease, 2) IN ('21', '22')
  AND (
    SELECT COUNT(*)
    FROM album_sales b
    WHERE LEFT(b.dateRelease, 2) = LEFT(a.dateRelease, 2)
      AND (b.sales > a.sales OR (b.sales = a.sales AND b.album < a.album))
  ) < 10
ORDER BY LEFT(a.dateRelease, 2), a.sales DESC;





SELECT artist, album, sales, dateRelease
FROM album_sales
WHERE artist = 'IVE';

