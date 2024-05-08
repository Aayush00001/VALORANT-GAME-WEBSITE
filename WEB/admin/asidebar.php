<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<style>
/* Sidebar Styles */
a{
  text-decoration: none;
  color: white;
}
ul {
  list-style: none;
}
.sidebar {
  width:auto;
  height: auto;
  background: #000;
  color: #fff;
  display: flex;
  padding: 20px;
}

.list {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.list li {
  cursor: pointer;
  letter-spacing: 1px;
  font-size: 0.9rem;
}

.list-title {
  display: flex;
  gap: 10px;
  align-items: center;
  width: 100%;
  padding: 10px;
  border-radius: 0.25rem;
}

.list-title > * {
  pointer-events: none;
}

.list-title .fa-chevron-down {
  margin-left: auto;
  font-size: 0.75rem;
}
.list.inner {
  height: 0;
  overflow: hidden;
  transition: height 200ms ease;
}

.list.inner li {
  padding: 8px;
  border-radius: 0.25rem;
}

.list-title.active .fa-chevron-down {
  transform: rotate(180deg);
}
</style>
<body>
<div class="sidebar">
        <ul class="list">
          <li><a href="adminpanel.php"><span class="list-title"><i class="fa fa-home"></i>Home</span></a>
          <li><a href="duser.php"><span class="list-title"><i class="fa fa-dashboard"></i>Dashboard</span></a>
        <li><span class="list-title"><i class="far fa-user-circle"></i>User<i class="fa fa-chevron-down"></i></span>
            <ul class="list inner">
                <div class="content">
                    <li><a href="ausermanage.php">User Management</a></li>
                </div>
            </ul>
        </li>
        <li><span class="list-title"><i class="fa fa-image  "></i>Gallery<i class="fa fa-chevron-down"></i></span>
            <ul class="list inner">
                <div class="content">
                    <li><a href="wallpapermanage.php">Wallpaper Management</a></li>
                    <li><a href="addwallpaper.php">Add Wallpaper</a></li>
                </div>
            </ul>
        </li>
        <li><span class="list-title"><i class="fa-solid fa-comments"></i>FeedBack<i class="fa fa-chevron-down"></i></span>
            <ul class="list inner">
                <div class="content">
                    <li><a href="afeedback.php">Feedback Management</a></li>
                </div>
            </ul>
        </li>
        </ul>
        
    </div>


<script>
  const handleClick = (event) => {
  const listTitle = event.target;
  const innerList = listTitle.nextElementSibling;
  const content = innerList.querySelector(".content");

  // listTitle.classList.toggle("active");
  if (listTitle.classList.contains("active")) {
    listTitle.classList.remove("active");
    innerList.style.height = 0;
  } else {
    listTitle.classList.add("active");
    innerList.style.height = `${content.clientHeight}px`;
  }
};
const listTitles = document.querySelectorAll(".list-title");
for (let listTitle of listTitles) {
  listTitle.addEventListener("click", handleClick);
}
</script>
</body>
</html>