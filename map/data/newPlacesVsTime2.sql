CREATE TEMPORARY TABLE temp SELECT time, placename FROM point WHERE 1 GROUP BY placename ORDER BY time;
SELECT DATEDIFF(time, '2008-01-01'),COUNT(*) FROM temp WHERE 1 GROUP BY DATE(time);