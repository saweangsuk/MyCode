<?
// ---- select compare today ----
select * from dates 
where dte = CAST(CURRENT_TIMESTAMP AS DATE)
;