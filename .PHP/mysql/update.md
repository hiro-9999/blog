https://style.potepan.com/articles/19076.html

update departments2, (select * from departments2) tbl2
set departments2.dept_name=concat(tbl2.dept_name,'1')
where departments2.dept_no=tbl2.dept_no;
