module.exports = function( grunt )
{
	grunt.initConfig(
	{
		jshint: [
			'Gruntfile.js',
			'public/assets/js/app.js'
		],

		concat: {
			js: {
				files: {
					'public/assets/js/build/app.js': [
						'public/assets/js/lib/jquery.min.js',
						'public/assets/js/lib/bootstrap.min.js',
						'public/assets/js/app.min.js'
					]
				}
			},

			css: {
				files: {
					'public/assets/css/build/app.css': [
						'public/assets/css/lib/bootstrap.min.css',
						'public/assets/css/lib/font-awesome.min.css',
						'public/assets/css/app.min.css'
					]
				}
			}
		},

		uglify: {
			js: {
				files: {
					'public/assets/js/app.min.js': [
						'public/assets/js/app.js',
					]
				}
			}
		},

		cssmin: {
			css: {
				files: {
					'public/assets/css/app.min.css': [
						'public/assets/css/app.css'
					]
				}
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.registerTask( 'default', ['jshint', 'uglify', 'cssmin', 'concat']);
};