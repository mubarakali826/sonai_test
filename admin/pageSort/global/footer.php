</div>
</div>
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/feather.min.js"></script>
<script src="./js/dashboard.js"></script>
<script>
function delConfirm() {
    var r = confirm('您确定要删除吗？')
    return r;
};
var curpage = sessionStorage.currentPage
$("#" + curpage + "").addClass('show');
$("#" + curpage + "").siblings().children('a').removeClass('active');
$("#" + curpage + "").prev().children('a').addClass('active');
</script>
</body>

</html>