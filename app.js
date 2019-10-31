var listElm = document.querySelector('#infinite-list');
var data = [];
var page = 1;
// Add 20 items.
var nextItem = 1;
var loadMore = function() {

    $.ajax({
        type:"GET",
        url:`https://jsonplaceholder.typicode.com/users`,
        success: function(res) {
            var data =  res;
            data.forEach(myFunction);
        }
      });
}

var myFunction = function(item, index) {
    
var elm = `<div class="user-profile">
	<img class="avatar" src="https://randomuser.me/api/portraits/men/${Math.floor(Math.random() * 10)}.jpg" />
    <div class="username">${item.name}</div>
  <div class="bio">
  	${item.email}
  </div>
  <div class="subject">
 <p onclick="showMore(event)"  data-subject="${item.company.bs}">Subject: ${item.company.bs.substr(0,30)+'…'}</p>
  </div>
  <div class="comments">
   <p onclick="showMore(event)"  data-comment="${item.company.catchPhrase}">Comments: ${item.company.catchPhrase.substr(0,30)+'…'}</p>
</div>
  </div>`;
    var el = document.createElement('li'); 
    el.innerHTML =  elm;
    listElm.appendChild(el);
  }
var showMore = function(e){
  if(e.target.dataset.subject){
    e.target.innerText = 'Subject:'+ e.target.dataset.subject
  }else{
    e.target.innerText = 'Comment:'+ e.target.dataset.comment
  }

}
// Detect when scrolled to bottom.
listElm.addEventListener('scroll', function() {
  if (listElm.scrollTop + listElm.clientHeight >= listElm.scrollHeight) {
    loadMore();
  }
});

// Initially load some items.
loadMore();