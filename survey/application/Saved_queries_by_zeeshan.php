SELECT DISTINCT(title) as name, COUNT(title) as total FROM muhalla
GROUP BY title