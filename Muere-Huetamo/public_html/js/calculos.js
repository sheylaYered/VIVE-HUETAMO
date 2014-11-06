step=0;
function autoImgFlip() {
if (step < 5) {step++;}
else {step=0;}
if (step==0)
{src="ima/2B5.jpg";}
if (step==1)
{src="ima/9FF.jpg";}
setTimeout("autoImgFlip()", 5000);
if (step==2)
{src="ima/logonatu.jpg";}
if (step==3)

} 
