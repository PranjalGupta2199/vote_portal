<h1> H-Rep (Budh) </h1>
<form action="hrep.php" method="post">
	<div class="radio">
	    <div class="opt">
            <label><input type="radio" name="vote" value="Aditya Iyer">Aditya Iyer</label>
        </div>
	    <div class="opt">
            <label><input type="radio" name="vote" value="NotA (Budh)">NotA</label>
        </div>
    </div>
    <div>
        <span>
            <button class="btn btn-default" onclick="goBack()">
                <span aria-hidden="true" class="glyphicon glyphicon-chevron-left"></span>
                Back
            </button>
        </span>
        <div class="radio">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-chevron-right"></span>
                Finish
            </button>
        </div>
    </div>
</form>