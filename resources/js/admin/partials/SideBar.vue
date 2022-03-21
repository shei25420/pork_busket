<template>
    <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
					<li>
						<a href="index.html" class="ai-icon mm-active" aria-expanded="false">
							<i class="icofont-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="#" class="ai-icon" aria-expanded="false">
							<i class="icofont-lunch"></i>
							<span class="nav-text">Table Management</span>
						</a>
					</li>
					<li>
						<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="icofont-chef"></i>
						<span class="nav-text">Staff Management</span>
						</a>
						<ul class="mm-collapse" aria-expanded="false">
							<li><router-link to="/o/dashboard/chefs">Chefs</router-link></li>
							<li><a href="#">Waiters</a></li>
						</ul>
					</li>
					<li>
						<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="icofont-clip-board"></i>
						<span class="nav-text">Inventory Management</span>
						</a>
						<ul class="mm-collapse" aria-expanded="false">
							<li><a href="#">Manage Stock Options</a></li>
							<li><a href="#">Manage Stocks</a></li>
							<li><a href="#">View Analytics</a></li>
						</ul>
					</li>
					<li>
						<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="icofont-restaurant-menu"></i>
						<span class="nav-text">Menu Management</span>
						</a>
						<ul class="mm-collapse" aria-expanded="false">
							<li><a href="#">Menu Categories</a></li>
							<li><a href="#">Menu Items</a></li>
							<li><a href="#">View Trackable Items</a></li>
						</ul>
					</li>
					<li>
						<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="icofont-cart-alt"></i>
						<span class="nav-text">Orders Management</span>
						</a>
						<ul class="mm-collapse" aria-expanded="false">
							<li><a href="#">Make Order</a></li>
							<li><a href="#">View Orders</a></li>
						</ul>
					</li>
					<li>
						<a class="has-arrow ai-icon mm-active" href="javascript:void()" aria-expanded="false">
							<i class="icofont-money-bag"></i>
						<span class="nav-text">Transactions</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="#">View Tranasctions</a></li>
							<li><a href="#">View Orders</a></li>
						</ul>
					</li>
					<li>
						<a href="#" class="ai-icon" aria-expanded="false">
							<i class="icofont-logout"></i>							
							<span class="nav-text">Logout</span>
						</a>
					</li>
                </ul>
            
				<div class="add-menu-sidebar">
					<img src="images/icon1.png" alt=""/>
					<p>Opimize, Organize & Profit</p>
					<a href="javascript:void(0);" class="btn bg-white text-black"><i class="icofont-logout"></i> Logout</a>
				</div>
				<div class="copyright">
					<p><strong>The Pork Busket</strong> © 2021 All Rights Reserved</p>
					<!-- <p>Made with <span class="heart"></span> by DexignZone</p> -->
				</div>
			</div>
    </div>
</template>

<script>
export default {

}
</script>