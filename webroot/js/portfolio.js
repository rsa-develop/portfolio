var images = [
    '/img/portfolio/bg-red.jpg',
    '/img/portfolio/tree1.png',
    '/img/portfolio/tree2.png',
    '/img/portfolio/tree3.png',
    '/img/portfolio/tree4.png',
    '/img/portfolio/tree5.png',
    '/img/portfolio/tree6.png',
    '/img/portfolio/tree7.png',
    '/img/portfolio/tree8.png',
    '/img/portfolio/tree9.png',
    '/img/portfolio/tree10.png'
]
window.onload = function(){
    for (i = 0; i < images.length; i++){
        var img = document.createElement('img');
        img.src = images[i];
    }
}

let mainTab = new Vue({
    el: '#mainTabs',
    data: {
        current: 1,
        scrollY: 0,
        treeShowCount: 0,
        showFuture: false,
        showInterest: false,
        tab4ShowCount: 0,
        isHistoryShown: true ,
        selectedHistoryCategory: 0 ,
        isHiddenHistoryCategories : true,
        hiddenHistoryCategoriesButtonTitle : "←",
    },
    components: {
    },
    mounted() {
        window.addEventListener('scroll', this.getScroll);
    },
    methods: {
        active: function(id) {
            return this.current == id
        },
        hiddenHistoryCategories() {
            this.isHiddenHistoryCategories = !this.isHiddenHistoryCategories
            this.hiddenHistoryCategoriesButtonTitle = this.isHiddenHistoryCategories ? "←" : "→"
        },
        changeTab: function(id) {
            this.current = id
            setTimeout(this.changeCompleation,10);
        },
        changeHistoryCategory: function( category ) {
            this.selectedHistoryCategory = category
            this.switchHistoryShown()
            setTimeout( this.switchHistoryShown ,1000);
        },
        isSelectedHistoryCategory: function( category ) {
            if( this.selectedHistoryCategory == 0 ) {
                return true
            }
            return this.selectedHistoryCategory == category
        },
        prefShowAnimNumber: function( num ) {
            return this.treeShowCount >= num
        },
        tab4ShowAnimPeriod: function( startNum , endNum ) {
            return startNum <= this.tab4ShowCount && this.tab4ShowCount < endNum
        },
        switchHistoryShown() {
            this.isHistoryShown = !this.isHistoryShown
        },
        changeCompleation: function() {
            setTabContentHeight()
            scrollTo( 0 , 0 )

            this.isHiddenHistoryCategories = true

            switch( this.current ) {
                case 1: break;
                case 2: 
                    setTimeout( function(){
                        if ( !navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/i) ) {
                            mainTab.isHiddenHistoryCategories = false
                        }
                    } , 1000);                
                    break;
                case 3: break;
                case 4: 
                    window.scrollTo( 0 , 0 );
                    this.tab4ShowCount = 0
                    let tab4Content = document.getElementById( "tab4Content" )
                    if( tab4Content != null ) {
                        tab4Content.style.height = (window.innerHeight - document.getElementsByClassName( "tab" )[0].clientHeight) + "px";
                    }
                    break;
            }
        },
        getScroll() {
            this.scrollY = window.scrollY;

            let isSp = navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/i)
            let detectionHeight = window.outerHeight / 1.6
            let treeDetectionAdjustment = 0.5
            if ( isSp ) { 
                detectionHeight = window.outerHeight / 1.3
                treeDetectionAdjustment = 1
            } 

            if( this.current == 1 ) {
                let element = document.getElementById( "prefParent" )
                for( let i = 0; i < 11; i++) {
                    if( element.getBoundingClientRect().top < ( detectionHeight * treeDetectionAdjustment ) - 15 * i ) { this.treeShowCount = i + 1 }
                    else if( i == 0 ) { this.treeShowCount = 0 }
                }
    
                let elementFuture = document.getElementById( "future" )
                this.showFuture = elementFuture.getBoundingClientRect().top < detectionHeight
    
                let elementInterest = document.getElementById( "interest" )
                this.showInterest = elementInterest.getBoundingClientRect().top < detectionHeight
            }

            if( this.current == 4 ) {
                this.tab4ShowCount = parseInt( this.scrollY / ( window.innerHeight / 2.5 ) )
            }
        }
    }
})

function setTabContentHeight() {
    let elements = document.getElementsByClassName( "tab-content" )
    for( let i = 0 ; i <= elements.length ; i++) {
        let e = elements[i]
        if (e instanceof HTMLElement) {
            e.style.marginTop = document.getElementsByClassName( "tab" )[0].clientHeight + "px";
        }
    }
}

setTabContentHeight()
window.addEventListener( 'resize', function() {
    setTabContentHeight()

    let tab4Content = document.getElementById( "tab4Content" )
    if( tab4Content != null ) {
        tab4Content.style.height = (window.innerHeight - document.getElementsByClassName( "tab" )[0].clientHeight) + "px";
    }
}, false );
