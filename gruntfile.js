module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			dist: {
				options: {
					style: 'compressed',
					sourcemap: 'none'
				},
				files: {
					'assets/css/main.css' : 'assets/scss/main.scss'
				}
			}
		},
		uglify: {
			dist: {
				files: {
					'assets/js/min/main.min.js': ['assets/js/main.js'],
				}
			},
		},
		watch: {
			options: {
				livereload: true
			},
			css: {
				files: 'assets/scss/*.scss',
				tasks: ['sass']
			},
			js: {
				files: 'assets/js/*.js',
				tasks: ['uglify']
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-devtools');
	grunt.registerTask('min',['uglify', 'sass']);
	grunt.registerTask('default', ['watch']);

}