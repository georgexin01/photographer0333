// Create Vue instance
new Vue({
    el: '#app',
    data: {
        galleries: [],
        libraries: [],
        formData: {
            name: 'test',
            email: 'test@gmail.com',
            contact: '0123',
            subject: 'test',
            message: 'messages'
        },
        isLoading: false,
        successfull: false,
        url: ''
    },
    created() {
        this.url = this.getUrl();
    },
    // 开始执行代码前，第一个执行就是 mounted
    mounted() {
        const sheetId = '1AV7ShrNFFoXcVRRT8e_1HKSQcEQza9Ij9L88MADwlMo';
        const getData = async (sheetId, tabName) => {
            try {
                const { data } = await axios.get(
                    `https://docs.google.com/spreadsheets/d/${sheetId}/gviz/tq?tqx=out:json&sheet=${tabName}&headers=1`
                )
                return JSON.parse(data.substring(47).slice(0, -2))
            } catch (error) {
                throw error
            }
        }
        const sheetTransformer = (cols, rows) => {
            const response = []
            for (const x of rows) {
                const data = {}
                for (let y = 0; y < x.c.length; y++) {
                    const key = cols[y].label
                    const value = x.c[y]?.f ?? x.c[y]?.v

                    if (key != '') {
                        data[key] = value
                    }
                }
                response.push(data)
            }
            return response
        }
        //get data
        getData(sheetId, "galleries").then((data) => {
            this.galleries = sheetTransformer(data.table.cols, data.table.rows);
            setTimeout(() => {


            }, 1000);
        }).catch((error) => {
            console.error("An error occurred:", error);
        });
        getData(sheetId, "libraries").then((data) => {
            this.libraries = sheetTransformer(data.table.cols, data.table.rows);
            setTimeout(() => {
                $(document).ready(function () {
                    $("[data-fancybox]").fancybox();
                });
                $('.animate-box').waypoint(function (direction) {
                    var i = 0;
                    if (direction === 'down' && !$(this.element).hasClass('animated')) {
                        i++;
                        $(this.element).addClass('item-animate');
                        setTimeout(function () {
                            $('body .animate-box.item-animate').each(function (k) {
                                var el = $(this);
                                setTimeout(function () {
                                    var effect = el.data('animate-effect');
                                    if (effect === 'fadeIn') {
                                        el.addClass('fadeIn animated');
                                    }
                                    else if (effect === 'fadeInLeft') {
                                        el.addClass('fadeInLeft animated');
                                    }
                                    else if (effect === 'fadeInRight') {
                                        el.addClass('fadeInRight animated');
                                    }
                                    else {
                                        el.addClass('fadeInUp animated');
                                    }
                                    el.removeClass('item-animate');
                                }, k * 200, 'easeInOutExpo');
                            });
                        }, 100);
                    }
                }, {
                    offset: '85%'
                });
                //geturl after vue load
                let pathname = this.url;
                const matchedLinks = $('.annie-main-menu a[href*="' + pathname + '"]');
                matchedLinks.closest('li').addClass('active');
                matchedLinks.closest('.annie-sub').addClass('open');
                matchedLinks.closest('.annie-sub').find('ul').css('display', 'block');
            }, 1000);
        }).catch((error) => {
            console.error("An error occurred:", error);
        });
    },
    methods: {
        //convert images
        googleImageConvertToImage(link) {
            return "https://lh3.googleusercontent.com/d/" + link.split('/')[5] + "=w500";
        },
        //get Libraries
        filterLibraries(limit) {
            let filteredLibraries =  this.libraries.filter(data => data.galleryUrl === this.url);
            if (filteredLibraries.length > 0) {
                if (limit > 0) {
                    return filteredLibraries.slice(0, limit);
                } else {
                    limit = 0 - limit;
                    return filteredLibraries.slice(limit, filteredLibraries.length);
                }
            }
        },
        //total Libraries
        totalLibraries() {
            return this.libraries.filter(data => data.galleryUrl === this.url).length;
        },
        filterGalleries() {
            return this.galleries.find(data => data.url === this.url);
        },
        getUrl() {
            const patharr = window.location.pathname.split("/");
            return patharr[patharr.length - 1];
        },
        submitForm() {
            const bookingData = {
                name: this.formData.name,
                email: this.formData.email,
                contact: this.formData.contact,
                subject: this.formData.subject,
                message: this.formData.message,
            };
            this.isLoading = true;
            console.log('Booking Data:', bookingData);
            const fetchCode = 'AKfycbyGTMHfMp0SlqhkQFRGD-j4jzwkfWV6XHdCcerD5FDzodfDKhnMkhlKos_RvB3AZnpC';
            setTimeout(() => {
                this.isLoading = false;
                this.successfull = true;
            }, 2000);
            this.fetchPostByType("sendEmail", fetchCode, bookingData);
        },
        fetchPostByType(type, url, data) {
            // data type
            const dataType = {};
            for (const key in data) {
                dataType[key] = typeof data[key];
            }
            const postData = { type, data, dataType };
            let fetchPromise = fetch(
                `https://script.google.com/macros/s/${url}/exec`,
                {
                    method: "POST",
                    mode: "no-cors",
                    cache: "no-cache",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    redirect: "follow",
                    body: JSON.stringify(postData),
                }
            );
            return fetchPromise;
        }
    },
    computed: {
        filteredCustomers() {
            return this.customers.filter(customer => {
                const id = customer.id.toLowerCase();
                const name = customer.name.toLowerCase();
                const contactA = customer.contactA.toString().toLowerCase();
                const searchTerm = this.filterCustomer.toLowerCase();
                return (id.includes(searchTerm) || name.includes(searchTerm) || contactA.includes(searchTerm));
            });
        },
    },
});